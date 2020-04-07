<?php

namespace App\Http\Controllers;

use App\QuestionArea;
use App\SurveyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PersonalController extends Controller
{
    public function show(){

	    $tests = DB::table('question_areas')
		    ->rightJoin('survey_users', function ($join) {
		      $join->on('question_areas.id', '=', 'survey_users.question_area_id')
			    ->where('survey_users.list_id', '=', auth()->user()->id);
		    })->get();


	    return view('personal.show',compact('tests'));
    }
}
