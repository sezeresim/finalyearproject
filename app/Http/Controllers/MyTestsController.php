<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyTestsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $question_areas= auth()->user()->questionarea;
        return view('mytests.mytests',compact('question_areas'));
    }
}
