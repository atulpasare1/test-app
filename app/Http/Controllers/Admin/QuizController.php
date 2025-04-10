<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Support\Str;
class QuizController extends Controller
{
    //
    private $title = 'Quiz';
    private $subtitle = 'You can manage Quiz From here';

    public function __construct(Type $var = null) {
        $this->var = $var;
    }

     private function GetData($tbl)
     {
        return DB::table($tbl)->get();
     }
    public function index(Request $req)
    {
        if($req->ajax()) {
          return   $this->getQuizzData($req);
        }
        return view('Admin.Quiz.index',[
            'title'=>$this->title,
            'section'=>'',
            'subtitle'=>$this->subtitle,
        ]);
    }
    public function create(Request $req)
    {
        return view('Admin.Quiz.create',[
            'title'=>'create Quiz',
            'boards'=>$this->GetData('mstr_boards'),
            'classes'=>$this->GetData('mstr_classes'),
            'subjects'=>$this->GetData('subjects'),
            'subtitle'=>'You can manage Quiz From here',
        ]);
    }

    public function store(Request $request)
    {
        // Validation rules
        $validator = Validator::make($request->all(), [
            'board' => 'required|integer',
            'class' => 'required|integer',
            'subject' => 'required|integer',
            'lession' => 'required|integer',
          //  'topic' => 'required|integer',
            'is_paid' => 'required|boolean',
            'is_private' => 'required|boolean',
            'description' => 'required|min:50',
            'title' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ],200);
        }

        // Create the new quiz entry in the database
       $qz_id=  DB::table('quizzes')->insertGetId([
            'board_id' => $request->board_id,
            'slug'=> Str::slug($request->title).Str::random(16),
            'code'=> Str::random(11),
            'sub_category_id'=> 1,
            'quiz_type_id'=> 1,
            'class_id' => $request->class_id,
            'subject_id' => $request->subject_id,
            'lesson_id' => $request->lession_id,
           // 'topic_id' => $request->topic_id,
            'is_paid' => $request->is_paid,
            'is_private' => $request->is_private,
            'description' => $request->description,
            'title' => $request->title,
            'created_at' => now(),  // Ensure timestamps are set
            'updated_at' => now(),
        ]);

        // Respond with success message
        return response()->json([
            'success' => true,
            'message' => 'Quiz created successfully!',
            'redirect_url' => route('quiz.edit',['quiz_id'=>$qz_id]),  // Redirect to quizzes list page or wherever you want
        ]);
    }

    // quiz_edit
    public function quiz_edit(Request $request,$quiz_id)
    {
        $quiz = DB::table('quizzes')->where('id',$quiz_id)->first();
        return view('Admin.Quiz.edit',[
            'title'=>'Update Quiz',
            'boards'=>$this->GetData('mstr_boards'),
            'classes'=>$this->GetData('mstr_classes'),
            'subjects'=>$this->GetData('subjects'),
            'subtitle'=>'You can manage Quiz From here',
            'quiz'=>$quiz
        ]);

    }

    // quiz_settings
    public function quiz_settings(Request $request,$quiz_id)
    {
        $quiz = DB::table('quizzes')->where('id',$quiz_id)->first();
        return view('Admin.Quiz.setting',[
            'title'=>'Update Quiz setting',
            'section'=>'setting',
            'subtitle'=>'You can manage Quiz setting From here',
            'quiz'=>$quiz
        ]);
    }
    // quiz_questions
    public function quiz_questions(Request $request,$quiz_id)
    {
        $quiz = DB::table('quizzes')->where('id',$quiz_id)->first();
        return view('Admin.Quiz.question',[
            'title'=>'Update Quiz question',
            'section'=>'question',
            'subtitle'=>'You can manage Quiz question From here',
            'quiz'=>$quiz
        ]);
    }
    // quiz_schedules
    public function quiz_schedules(Request $request,$quiz_id)
    {
        $quiz = DB::table('quizzes')->where('id',$quiz_id)->first();
        return view('Admin.Quiz.schedules',[
            'title'=>'Quiz schedules ',
            'section'=>'schedules',
            'subtitle'=>'You can manage Quiz From here',
            'quiz'=>$quiz
        ]);
    }



    public function get_lessions_by_subjects(Request $request)
    {
       

        // Get subjects for the specified class_id
        $subjects = DB::table('mstr_lessons')->where('subject_id', $request->subject_id)->get();

        // Return a view or JSON response with subjects data
        return response()->json([
            'lessions' => $subjects,
        ]);
    }


    public function getQuizzData($request)
    {
        // Get the request parameters for DataTable
        $draw = $request->input('draw');
        $start = $request->input('start');
        $length = $request->input('length');
        
        // You can add filtering and sorting logic here as needed
        $query =  DB::table('quizzes');
        
        // Optionally, apply any filters or search query if required
        if ($search = $request->input('search.value')) {
            $query->where('title', 'like', '%' . $search . '%')
                  ->orWhere('class', 'like', '%' . $search . '%')
                  ->orWhere('subject', 'like', '%' . $search . '%')
                  ->orWhere('lesson', 'like', '%' . $search . '%')
                  ->orWhere('status', 'like', '%' . $search . '%');
        }

        // Total records count (without filters)
        $totalRecords = $query->count();
        
        // Apply pagination (limit and offset)
        $data = $query->offset($start)
                      ->limit($length)
                      ->get();

        // Prepare the data response in the DataTable format
        $response = [
            "draw" => $draw,
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $data->count(), // You can adjust this if you have complex filtering logic
            "data" => $data->map(function ($item) {
                return [
                    'title' => $item->title,
                    'class' => $item->class_id,
                    'subject' => $item->subject_id,
                    'lesson' => $item->lesson_id,
                    'status' => $item->is_active ? 'Active' : 'Inactive',
                    'actions' => "<button>Edit</button> <button>Delete</button>",
                ];
            }),
        ];

        return response()->json($response);
    }
}
