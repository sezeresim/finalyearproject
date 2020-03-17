<?php

namespace App\Http\Controllers;

use App\QuestionArea;
use Illuminate\Http\Request;

class questionAreaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('questionarea.create');
    }

    public function store()
    {

        $data=request()->validate([
            'title'=>'required',
            'purpose'=>'required',
        ]);

        /*$data['user_id']=auth()->user()->id;

        $questionarea = \App\questionArea::create($data);*/

        $questions= auth()->user()->questionarea()->create($data);

        return redirect('/questionarea/'.$questions->id);
    }

    public function show(QuestionArea $questionarea)
    {
        $questionarea->load('questions.answers.responses');

        return view('questionarea.show',compact('questionarea'));
    }
}
