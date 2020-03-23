<?php

namespace App\Http\Controllers;

use App\ClassGroup;
use Illuminate\Http\Request;

class ClassListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
