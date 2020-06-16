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

  public function index()
  {
    $userCount = User::count();
    $questionareaCount = QuestionArea::count();
    $responseCount = SurveyResponse::count();
    $questionCount = Question::count();
    return view('welcome', compact('userCount', 'questionareaCount', 'responseCount', 'questionCount'));
  }
}
