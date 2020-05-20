<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\QuestionArea;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
      $questions= QuestionArea::where('survey_state', '=', "public")->get();
      return response()->json(['data' => $questions,'qacount'=>$questions->count()],200);
    }
}
