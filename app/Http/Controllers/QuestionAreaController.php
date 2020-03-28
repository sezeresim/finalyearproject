<?php

namespace App\Http\Controllers;

use App\ClassList;
use App\QuestionArea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;

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
        $userclass=Auth::user()->myclassgroup;

        return view('questionarea.create',compact('userclass'));
    }

    public function store()
    {
        $data=request()->validate([
            'title'=>'required',
            'purpose'=>'required',
        ]);
        $data['survey_state']=request("survey_state");
        $data['last_date']=request("last_date");
        $data['survey_list']=request("survey_list");

        //Creating new test
        $questions= auth()->user()->questionarea()->create($data);

        //Counting Post
        auth()->user()->increment('post_counter',1);

        return redirect('/questionarea/'. $questions->id);
    }

    public function show(QuestionArea $questionarea)
    {
        $questionarea->load('questions.answers.responses');
        $questionarea->load('surveys');
        $questionarea->load('questions');

        return view('questionarea.show',compact('questionarea'));
    }

    public function destroy(QuestionArea $questionarea)
    {
        $questionarea->delete();
        auth()->user()->decrement('post_counter');

        return redirect('/questionarea/'.$questionarea->id);
    }
}
