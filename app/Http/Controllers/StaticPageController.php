<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function about()
    {
        return view('staticpages.about');
    }

    public function career()
    {
        return view('staticpages.career');
    }

    public function contact()
    {
        return view('staticpages.contact');
    }

    public function references()
    {
        return view('staticpages.referecences');
    }

    public function team()
    {
        return view('staticpages.team');
    }
}
