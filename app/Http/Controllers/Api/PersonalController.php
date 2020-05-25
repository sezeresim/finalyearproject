<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonalController extends Controller
{
    public function show(){

      $tests = DB::table('question_areas')
        ->where('question_areas.survey_state','=',"private")
        ->rightJoin('survey_users', function ($join) {
          $join->on('question_areas.id', '=', 'survey_users.question_area_id')
            ->where('survey_users.list_id', '=', request('id'));
        })->get();

      if($tests->count()==0){
        return response()->json(['data'=>'no content'],200);
      }else{
        return response()->json(['data' => $tests], 200);
      }
    }
}
