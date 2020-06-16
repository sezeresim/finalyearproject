<?php

namespace App\Http\Controllers;

use App\QuestionArea;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PublicController extends Controller
{
  public function show()
  {
    $date = Carbon::now()->toDateString();
    $questions = QuestionArea::where('survey_state', '=', "public")->where('last_date','>',$date)->orderBy('created_at', 'desc')->get();
    return view('public.show', compact('questions'));
  }

  public function like(QuestionArea $questionarea)
  {
    $id = $questionarea['id'];
    $questionarea->where("id", $id)->increment("like_count", 1);
    $data = $questionarea->where('id', $id)->first();
    return response()->json(['success' => $data['like_count']]);
  }
}
