<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PersonalController extends Controller
{
    public function show(){

	    $tests = DB::table('question_areas')
		    ->where('question_areas.survey_state','=',"private")
		    ->rightJoin('survey_users', function ($join) {
		      $join->on('question_areas.id', '=', 'survey_users.question_area_id')
			      ->where('survey_users.list_id', '=', auth()->user()->id);
		    })->get();

	    return view('personal.show',compact('tests'));
    }
}
