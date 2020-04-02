<?php

namespace App\Http\Controllers;

use App\ClassGroup;
use App\QuestionArea;
use Illuminate\Http\Request;

class DetailController extends Controller
{
  public function show(QuestionArea $questionarea)
  {
  	$questionarea->load('questions.answers.responses');
     $questionarea->load('surveys');
     $questionarea->load('questions');

     $questionarea->load('surveyusers');
     //dd($questionarea);
     $classgroup=ClassGroup::find($questionarea["survey_list"]);
     //dd($classgroup);

    return view('mytests.detail.show',compact('questionarea','classgroup'));
  }
}
