<?php

namespace App\Http\Controllers\Api;

use App\Answer;
use App\Http\Controllers\Controller;
use App\Question;
use App\QuestionArea;
use App\SurveyUser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SurveyController extends Controller
{
  public function calculateScore($scores){
    $totalScore=0;
    foreach ($scores as $score){
      $answer=Answer::where('id',$score['answer_id'])->get('answer')->toArray();
      $questionanswer=Question::where('id',$score['question_id'])->get('rightanswer')->toArray();
      $point=Question::where('id',$score['question_id'])->get('score')->toArray();

      if ($answer[0]['answer'] == $questionanswer[0]['rightanswer'] ){
        $totalScore=$totalScore+$point[0]['score'];
      }
    }
    return $totalScore;
  }

  public function show(QuestionArea $questionarea){
    $questionarea->load('questions.answers');
    return response()->json(['questions'=>$questionarea['questions']],200);
  }

  public function store(Request $request){
    $survey = $questionarea->surveys()->create($data['survey']);
    $survey->responses()->createMany($data['responses']);
  }
}
