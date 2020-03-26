<?php

namespace App\Http\Controllers;

use App\ClassGroup;
use App\ClassList;



class ClassListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(ClassGroup $classgroup){

       $data = request()->validate([
            'list_id'=>['required','unique:class_lists,list_id,NULL,id,class_group_id,'.$classgroup->id],
            ], [
                'unique' => 'Eklediğiniz kullanıcı bulunmaktadır.',
            ]);

        $addlist=$classgroup->classlist()->create($data);

        return redirect('/myclass/'.$classgroup->id .'/list');
    }

    public function destroy(ClassGroup $classgroup,ClassList $list)
    {
        $list->delete();
        return redirect($classgroup->path());
    }
}
