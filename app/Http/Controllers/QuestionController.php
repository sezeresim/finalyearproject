<?php

namespace App\Http\Controllers;

use App\QuestionArea;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(QuestionArea $questionArea){
        return view('question.create',compact('questionArea'));
    }

    public function store(QuestionArea $questionArea){
        //dd(request()->all());

        $data = request()->validate([
            'question.question'=>'required',
            'answers.*.answer'=>'required',
        ]);
        //dd($data);
        $question=$questionArea->questions()->create($data['question']);
        $question->answers()->createMany($data['answers']);

        return redirect('/questionarea/'.$questionArea->id);
    }
}
