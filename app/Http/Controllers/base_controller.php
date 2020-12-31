<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class base_controller extends Controller
{
    public function create()
    {
        return view('add_stud');
    }
    public function store(request $request)
    {
        return $request->all();

    }
}
