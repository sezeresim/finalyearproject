<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use App\QuestionArea;
use App\SurveyUser;
use Illuminate\Http\Request;


class SurveyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function show(QuestionArea $questionarea,$slug){

        if($questionarea->survey_state =="public"){
            $questionarea->load('questions.answers');
            return view('survey.show',compact('questionarea'));
        }else{
            $control=SurveyUser::where("question_area_id",$questionarea->id)->where("list_id",auth()->user()->id)->count();
            if($control=="1" && $questionarea->survey_state=="private" ){
                $questionarea->load('questions.answers');
                return view('survey.show',compact('questionarea'));
            }else{
                echo "Erişim Yetkiniz Yok";
            }
        }
    }

    public function store(QuestionArea $questionarea)
    {
    	if ($questionarea->survey_state=="public"){
		    $data=request()->validate([
			    'responses.*.answer_id' =>'required',
			    'responses.*.question_id' => 'required',
			    'survey.name'=> 'required',
			    'survey.email'=> ['required'],
		    ]);

				if($questionarea->whatIs == "quiz"){
					$totalScore=$this->calculateScore($data['responses']);
				}

		    $survey = $questionarea->surveys()->create($data['survey']);
		    $survey->responses()->createMany($data['responses']);
	    }

    	if($questionarea->survey_state=="private"){

		    $data=request()->validate([
			    'responses.*.answer_id' =>'required',
			    'responses.*.question_id' => 'required',
		    ]);

		    $updateUserComplete=SurveyUser::where("list_id",auth()->user()->id)
			    ->where("question_area_id",$questionarea->id)->update(["complete"=>1]);

		    if($questionarea->whatIs == "quiz"){
			    $totalScore=$this->calculateScore($data['responses']);
		    }
		    $updateUserScore=SurveyUser::where("list_id",auth()->user()->id)
			    ->where("question_area_id",$questionarea->id)->update(["score"=>$totalScore]);

		    $survey = $questionarea->surveys()->create([
			    'question_area_id'=>$questionarea->id,
			    'name'=>auth()->user()->name,
			    'email'=>auth()->user()->email
		    ]);

		    $survey->responses()->createMany($data['responses']);
	    }

        return '<h1>Teşekkürler</h1>'.$totalScore;

    }

}
