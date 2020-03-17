<?php

namespace App\Http\Controllers;

use App\QuestionArea;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function indexfun(){
        $questions=\App\QuestionArea::all();

       // return response()->json($questions);
        return view('welcome',compact('questions'));
    }
}
