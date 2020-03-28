<?php

namespace App\Http\Controllers;

use App\QuestionArea;
use App\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function indexfun(){
        $questions= QuestionArea::where('survey_state', '=', "public")->get();
        $users=User::all();
       // return response()->json($questions);
        return view('welcome',compact('questions','users'));
    }
}
