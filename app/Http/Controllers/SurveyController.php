<?php

namespace App\Http\Controllers;

use App\QuestionArea;
use App\SurveyUser;
use Illuminate\Http\Request;

class SurveyController extends Controller
{

  /*  public function __construct()
    {
        $this->middleware('surveycontroller');
    }*/

    public function show(QuestionArea $questionarea,$slug){

        $control=SurveyUser::where("question_area_id",$questionarea->id)->where("list_id",auth()->user()->id)->count();
        if($control=="1"){
            $questionarea->load('questions.answers');
            return view('survey.show',compact('questionarea'));
        }else{
            echo "Erişim Yetkiniz Yok";
        }

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
