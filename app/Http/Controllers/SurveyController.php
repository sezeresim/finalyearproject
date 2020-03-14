<?php

namespace App\Http\Controllers;

use App\QuestionArea;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function show(QuestionArea $questionarea,$slug){
        $questionarea->load('questions.answers');
        return view('survey.show',compact('questionarea'));
    }
    public function store(QuestionArea $questionarea)
    {
//        dd(request()->all());
        $data=request()->validate([
            'responses.*.answer_id' =>'required',
            'responses.*.question_id' => 'required',
            'survey.name'=> 'required',
            'survey.email'=> 'required',
        ]);

        $survey = $questionarea->surveys()->create($data['survey']);
        $survey->responses()->createMany($data['responses']);

        return '
        <h1>Teşekkürler</h1>
        ';

    }
}
