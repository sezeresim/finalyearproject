<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\QuestionArea;
use App\SurveyUser;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
      $questions = QuestionArea::where('survey_state', '=', "public")->orderBy('created_at', 'asc')->get();
      return response()->json(['data' => $questions, 'qacount' => $questions->count()], 200);
    }

    public function likeButton(QuestionArea $questionarea)
    {
      $id=$questionarea['id'];
      $questionarea->where("id",$id)->increment("like_count",1);
      $data=$questionarea->where('id',$id)->first();
      return response()->json(['success'=>$data['like_count']]);
    }

}
