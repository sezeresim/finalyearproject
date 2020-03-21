<?php

namespace App\Http\Controllers;

use App\MyClassGroup;
use Illuminate\Http\Request;

class MyClassController extends Controller
{
    public function show(){
        $mygroups=MyClassGroup::all();
        return view('myclass.show',compact('mygroups'));
    }
}
