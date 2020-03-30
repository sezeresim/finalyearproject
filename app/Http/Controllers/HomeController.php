<?php

namespace App\Http\Controllers;

use App\QuestionArea;
use App\SurveyUser;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userssurvey=SurveyUser::where("list_id",auth()->user()->id)->get("question_area_id")->toArray();
        //dd($userssurvey);
        $tests=QuestionArea::whereIn("id",$userssurvey)->get();
        //dd($tests);
        return view('home',compact("tests"));
    }
}
