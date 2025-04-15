<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use Validator;
class QuestionController extends Controller
{
    //

    //
    private $title = 'Question ';
    private $subtitle = 'Multiple Choice Single Answer Question';

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
            return $this->getQuesData($req);
        }
        return view('Admin.Questionbank.index',[
            'title'=>$this->title,
            'section'=>'',
            'subtitle'=>$this->subtitle,
        ]);
    }

    public function create(Request $req)
    {
        return view('Admin.Questionbank.create',[
            'title'=>'Question Details',
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
            'question' => 'required|string',
            'option' => 'required|array',
            'option.*' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ],200);
        }

        // Create the new quiz entry in the database
        $request->answer = $request->answer ?? null; // Set answer to null if not provided
        $request->option = $request->option ?? []; // Set option to empty array if not provided
       $qz_id=  DB::table('question')->insertGetId([
            'question'=> $request->question,
            'option'=> $request->option->map(function ($option) {
                return [
                    'option' => $option['option'],
                    'is_answer' => $option['is_answer'] ?? false, // Default to false if not provided
                    'partial_weightage'=> 0 // Default to false
                ];
            }),
            'correct_answer'=> $request->answer,
            'code'=> 'que'.Str::random(11),
            'updated_at' => now(),
        ]);

        // Respond with success message
        return response()->json([
            'success' => true,
            'message' => 'Quiz created successfully!',
            'redirect_url' => route('quiz.edit',['quiz_id'=>$qz_id]),  // Redirect to quizzes list page or wherever you want
        ]);
    }


    public function getQuesData($request)
    {
        // Get the request parameters for DataTable
        $draw = $request->input('draw');
        $start = $request->input('start');
        $length = $request->input('length');

        // You can add filtering and sorting logic here as needed
        $query =  DB::table('questions');

        // Optionally, apply any filters or search query if required
        if ($search = $request->input('search.value')) {
            $query->where('code', 'like', '%' . $search . '%');
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
                    'code' => '<small>'.$item->code.'</small>',
                    'question' => '<small>'.Str::substr($item->question, 0,100).'</small>',
                    'subject' => $item->topic_id,
                    'type' => $item->topic_id,
                    'skill' => $item->topic_id,
                    'topic' => $item->topic_id,
                    'is_active' => $item->topic_id,
                    'status' => $item->is_active ? '<span class="badge rounded-pill bg-label-success me-1">Active</span>' : '<span class="badge rounded-pill bg-label-danger me-1">Inactive</span>',
                    'actions' => "<a href='".route('quiz.edit',['quiz_id'=>$item->id])."'><i class='ri-edit-box-line me-2'></i></button> <button>Delete</button>",
                ];
            }),
        ];

        return response()->json($response);
    }
}
