<?php

namespace App\Http\Controllers;

use App\ClassGroup;
use App\ClassList;
use App\User;
use Illuminate\Http\Request;

class ClassGroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $groups=auth()->user()->myclassgroup;
        return view('myclass.show',compact('groups'));
    }

    public function create()
    {
        return view('myclass.create');
    }
    public function store(){

        $data=request()->validate([
            'name'=>'required',
        ]);
        //dd($data);
        //create new class group
        $newclassgroup=auth()->user()->myclassgroup()->create($data);
        ClassList::create([
            'list_id' => auth()->user()->id,
            'class_group_id'=>$newclassgroup->id,
        ]);
        return redirect('myclass');
    }

    public function show(ClassGroup $classgroup)
    {
        $classgroup->load('classlist');
        $users=User::all();
        //dd($classgroup);
        return view('myclass.list.show',compact('classgroup','users'));
    }

    public function destroy(ClassGroup $classgroup)
    {
        $classgroup->delete();

        return redirect('myclass');
    }
}
