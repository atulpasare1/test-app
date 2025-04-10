<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB; 

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
}
