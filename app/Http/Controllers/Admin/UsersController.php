<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    private $tbl = 'users';
    public function __construct(Request $req) 
    {
        
    }

    public function index(Request $req)
    {
        return view('Admin.users',['title'=>'Users']);
    }

    public function userdatatable(Request $request)
    {
        $columns = [
            0 => 'id',
            1 => 'name',
            2 => 'email',
            3 => 'role',
            4 => 'id',
        ];

        
         
        $query = DB::table($this->tbl);

        $totalData = $query->count();
        $totalFiltered = $totalData;
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (!empty($request->input('search.value'))) {
            $search = $request->input('search.value');
            $query->where(function ($query) use ($search) {
                $query->where('id', 'LIKE', "%{$search}%")
                    ->orWhere('name', 'LIKE', "%{$search}%")
                    ->orWhere('email', 'LIKE', "%{$search}%")
                    ->orWhere('role', 'LIKE', "%{$search}%");
            });

            $totalFiltered = $query->count();
        }

        $users = $query->offset($start)
            ->limit($limit)
            ->orderBy($order, $dir)
            ->get();

        $data = [];
        foreach ($users as $user) {
            $nestedData['id'] = $user->id;
            $nestedData['name'] = $user->name;
            $nestedData['email'] = $user->email;
            $nestedData['role'] = $user->role;
            $nestedData['action'] = $user->role;
           
            $data[] = $nestedData;
        }

        return json_encode([
            "draw" => intval($request->input('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        ]);
    }
}