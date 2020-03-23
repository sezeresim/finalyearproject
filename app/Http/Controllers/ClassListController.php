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

    public function store(ClassGroup $classgroup){

        $data = request()->validate([
            'list_id'=>'required',
        ]);
        $data['list_id']=request('list_id');
        //dd(request()->all());
        $addlist=$classgroup->classlist()->create($data);
        return redirect('/myclass/'.$classgroup->id);
    }
}
