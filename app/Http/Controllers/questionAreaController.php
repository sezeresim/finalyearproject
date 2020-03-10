<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class questionAreaController extends Controller
{
    public function create(){
        return view('questions.create');
    }
}
