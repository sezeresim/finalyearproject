<?php

namespace App\Http\Controllers;

use App\QuestionArea;
use App\SurveyResponse;
use App\Question;
use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function indexfun()
  {
    $userCount = User::count();
    $questionareaCount = QuestionArea::count();
    $responseCount = SurveyResponse::count();
    $questionCount = Question::count();
    return view('welcome', compact('userCount', 'questionareaCount', 'responseCount', 'questionCount'));
  }

  public function showPublic()
  {
    $date = Carbon::now()->toDateString();
    $questions = QuestionArea::where('survey_state', '=', "public")->where('last_date','>',$date)->get();
    return view('public.show', compact('questions'));
  }

  public function ajaxRequest(QuestionArea $questionarea)
  {
    $id = $questionarea['id'];
    $questionarea->where("id", $id)->increment("like_count", 1);
    $data = $questionarea->where('id', $id)->first();
    return response()->json(['success' => $data['like_count']]);
  }
}
