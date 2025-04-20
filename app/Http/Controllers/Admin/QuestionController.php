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




    public function importquestion(Request $request)
    {
        return view('Admin.Questionbank.import-questions',[
            "title"=>'Import Questions',
            "subtitle"=>'You can import questions from here',

        ]);
    }
    public function submitimport(Request $request)
{
    $request->validate([
        'file' => 'required|mimes:xlsx,xls',
        'subject_id' => 'required|integer',
        'lession_id' => 'required|integer',
        'topic_id' => 'required|integer',
    ]);

    Session::forget('imported_count'); // Reset previous count

    $import = new QuestionsImport($request->subject_id, $request->lession_id, $request->topic_id);
    Excel::import($import, $request->file('file'));

    $importedCount = Session::get('imported_count', 0);

    return response()->json([
        'success' => true,
        'message' => 'Questions imported successfully.',
        'imported_count' => $importedCount
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
        $validator = Validator::make($request->all(), [
            'question' => 'required|string',
            'options' => 'required|array',
            'options.*.content' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 200);
        }

        // Process options and determine the correct answer
        $answerIndex = null;
        $options = collect($request->options)->map(function ($option, $index) use (&$answerIndex) {
            if (isset($option['isAnswer']) && $option['isAnswer'] == true) {
                $answerIndex = $index;
            }

            return [
                'option' => $option['content'],
                'is_answer' => $option['isAnswer'] ?? false,
                'partial_weightage' => 0,
            ];
        });

        if ($answerIndex === null) {
            return response()->json([
                'success' => false,
                'message' => 'Correct answer not provided.',
            ], 200);
        }

        // Insert the question
        $que_id = DB::table('questions')->insertGetId([
            'question' => $request->question,
            'options' => $options->toJson(),
            'correct_answer' => $answerIndex,
            'question_type_id' => 1,
            'skill_id' => 1,
            'code' => 'que' . Str::random(11),
            'updated_at' => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Question created successfully!',
            'redirect_url' => route('question.edit', ['que_id' => $que_id]),
        ]);
    }



    public function getQuesData($request)
    {
        // Get the request parameters for DataTable
        $draw = $request->input('draw');
        $start = $request->input('start');
        $length = $request->input('length');
        $search = $request->input('search.value');

        // Total records count (without filters)
        $totalRecords = DB::table('questions')->count();

        // Base query
        $query = DB::table('questions');

        // Apply filtering if there's a search value
        if (!empty($search)) {
            $query->where('code', 'like', '%' . $search . '%');
        }

        // Count after filtering
        $filteredRecords = $query->count();

        // Apply pagination
        $data = $query->offset($start)
                      ->limit($length)
                      ->get();

        // Prepare the response
        $response = [
            "draw" => intval($draw),
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $filteredRecords,
            "data" => $data->map(function ($item) {
                return [
                    'code' => '<small>' . $item->code . '</small>',
                    'question' => '<small>' . Str::substr($item->question, 0, 100) . '</small>',
                    'subject' => $item->topic_id,
                    'type' => $item->topic_id,
                    'skill' => $item->topic_id,
                    'topic' => $item->topic_id,
                    'is_active' => $item->topic_id,
                    'status' => $item->is_active
                        ? '<span class="badge rounded-pill bg-label-success me-1">Active</span>'
                        : '<span class="badge rounded-pill bg-label-danger me-1">Inactive</span>',
                    'actions' => "<a href='" . route('quiz.edit', ['quiz_id' => $item->id]) . "'>
                                    <i class='ri-edit-box-line me-2'></i></a>
                                  <button>Delete</button>",
                ];
            }),
        ];

        return response()->json($response);
    }


    public function question_edit(Request $request,$que_id)
    {
        $Question = DB::table('questions')->where('id',$que_id)->first();
        return view('Admin.Questionbank.edit',[
            'title'=>'Update Question',
            'subtitle'=>'You can manage Question From here',
            'que'=>$Question
        ]);

    }
}
