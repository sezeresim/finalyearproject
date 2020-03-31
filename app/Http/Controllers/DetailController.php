<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
  public function show()
  {
    /* $questionarea->load('questions.answers.responses');
     $questionarea->load('surveys');
     $questionarea->load('questions');*/

    return view('mytests.detail.show');
  }
}
