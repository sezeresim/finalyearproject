<?php

namespace App\Http\Controllers;

use App\QuestionArea;
use Illuminate\Http\Request;

class MyTestsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $question_areas = auth()->user()->questionarea;
        return view('mytests.mytests', compact('question_areas'));
    }



    public function destroy(QuestionArea $questionarea)
    {
        $questionarea->delete();
        toast('Test silme işlemi başarılı','success');
        return redirect('/mytests');
    }
}
