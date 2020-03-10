<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class questionAreaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store()
    {

        $data=request()->validate([
            'title'=>'required',
            'purpose'=>'required',
        ]);

        /*$data['user_id']=auth()->user()->id;

        $questions = \App\questionArea::create($data);*/

        $questions= auth()->user()->questions()->create($data);

        return redirect('/questions/'.$questions->id);
    }

    public function show(\App\questionArea $question)
    {
        return view('questions.show',compact('question'));
    }
}
