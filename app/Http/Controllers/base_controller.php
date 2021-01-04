<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class base_controller extends Controller
{
    public function index($id)
    {
        return DB::table('student')->get();
        //return DB::table('student')->where('id',$id)->get();
    }

    public function create()
    {
        return view('add_stud');
    }
    public function store(request $request)
    {
        DB::table('student')->insert(
        ['name'=>$request->name,
        'email'=>$request->email,
        'address'=>$request->address,
        'contact'=>$request->contact
        ]);

        return $request->all();

    }
}
