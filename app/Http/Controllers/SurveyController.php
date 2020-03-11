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
}
