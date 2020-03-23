<?php

namespace App\Http\Controllers;

use App\MyClassGroup;
use Illuminate\Http\Request;

class MyClassController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        $groups=MyClassGroup::all();
        return view('myclass.show',compact('groups'));
    }
}
