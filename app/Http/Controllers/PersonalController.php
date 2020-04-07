<?php

namespace App\Http\Controllers;

use App\QuestionArea;
use App\SurveyUser;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function show(){
	    $userssurvey=SurveyUser::where("list_id",auth()->user()->id)->get("question_area_id")->toArray();

	    //dd($userssurvey);
	    $tests=QuestionArea::whereIn("id",$userssurvey)->get();

	    return view('personal.show',compact('tests'));
    }
}
