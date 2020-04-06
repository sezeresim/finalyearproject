<?php

namespace App\Http\Controllers;

use App\Answer;
use App\ClassGroup;
use App\Question;
use App\QuestionArea;
use App\Survey;
use App\SurveyResponse;
use Illuminate\Http\Request;

class DetailController extends Controller
{
	public function calculateSuccess($id){

		$surveys=Survey::where("question_area_id",$id)->get('id')->toArray();

		$rightcount=0;
		$falsecount=0;
		foreach ($surveys as $survey){

			$responses=SurveyResponse::where("survey_id",$survey)->get('answer_id')->toArray();

			foreach ($responses as $response){
				$answer=Answer::where('id',$response)->get(['answer','question_id'])->toArray();
				$questionanswer=Question::where('id',$answer[0]['question_id'])->get('rightanswer')->toArray();

				if($answer[0]['answer']==$questionanswer[0]['rightanswer']){
					$rightcount++;
				}else{
					$falsecount++;
				}

			}
		}

		if($rightcount+$falsecount != 0){
			return $rightcount/($rightcount+$falsecount)*100;
		}
		return null;
	}
  public function show(QuestionArea $questionarea)
  {
  	  $questionarea->load('questions.answers.responses');
     $questionarea->load('surveys');
     $questionarea->load('questions');

	  $success_sta=$this->calculateSuccess($questionarea->id);

     $classgroup=ClassGroup::find($questionarea["survey_list"]);

    return view('mytests.detail.show',compact('questionarea','classgroup','success_sta'));
  }
}
