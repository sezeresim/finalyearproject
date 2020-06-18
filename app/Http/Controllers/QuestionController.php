<?php

namespace App\Http\Controllers;

use App\Question;
use App\QuestionArea;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function create(QuestionArea $questionarea)
  {
    return view('question.create', compact('questionarea'));
  }

  public function store(QuestionArea $questionarea)
  {
    //dd(request()->all());
    if ($questionarea->whatIs == "quiz") {
      $data = request()->validate([
        'question.question' => 'required',
        'answers.*.answer' => 'required',
        'question.rightanswer' => 'required',
        'question.score' => 'numeric',
      ]);
    } else {
      $data = request()->validate([
        'question.question' => 'required',
        'answers.*.answer' => 'required',
      ]);
    }


    //dd($data);

    $question = $questionarea->questions()->create($data['question']);
    $question->answers()->createMany($data['answers']);
    toast('Yeni Soru Eklendi','success');
    return redirect('/questionarea/' . $questionarea->id);
  }

  public function destroy(QuestionArea $questionarea, Question $question)
  {
    $question->answers()->delete();
    $question->delete();

    return redirect($questionarea->path());
  }
}
