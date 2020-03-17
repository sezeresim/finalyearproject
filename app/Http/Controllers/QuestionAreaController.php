<?php

namespace App\Http\Controllers;

use App\QuestionArea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class questionAreaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('postcounter');
    }

    public function postCounter()
    {
        if(Auth::user()->post_counter==Auth::user()->post_count) {
            return false;
        }
        return true;
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

        //Creating new test
        $questions= auth()->user()->questionarea()->create($data);

        //Counting Post
        auth()->user()->increment('post_counter',1);

        return redirect('/questionarea/'.$questions->id);
    }

    public function show(QuestionArea $questionarea)
    {
        $questionarea->load('questions.answers.responses');

        return view('questionarea.show',compact('questionarea'));
    }
}
