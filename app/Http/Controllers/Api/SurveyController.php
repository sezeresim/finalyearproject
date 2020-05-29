<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\QuestionArea;
use App\SurveyUser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SurveyController extends Controller
{
  public function show(QuestionArea $questionarea){
    $questionarea->load('questions.answers');
    return response()->json(['questions'=>$questionarea],200);
  }
}
