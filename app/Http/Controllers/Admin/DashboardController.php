<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function __construct(Request $req) {
        
    }

    public function index(Request $req)
    {
        return view('Admin.dashboard',['title']);
    }
}
