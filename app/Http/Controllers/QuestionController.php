<?php

namespace App\Http\Controllers;

use App\questionArea;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(questionArea $questionArea){
        return view('question.create',compact('questionArea'));
    }

    public function store(questionArea $questionArea){
        //dd(request()->all());

        $data=request()->validate([
            'question.question'=>'required',
            'answers.*.answer'=>'required',
        ]);
        dd($data);
        $question=$questionArea->test()->create($data['question']);
    }
}
