<?php

namespace App\Http\Controllers;

use App\ClassGroup;
use App\ClassList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class ClassListController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function store(ClassGroup $classgroup)
  {

    $data = request()->validate([
      'list_id' => ['required', 'unique:class_lists,list_id,NULL,id,class_group_id,' . $classgroup->id],
    ], [
      'unique' => 'Eklediğiniz kullanıcı sınıfta bulunmaktadır.',
    ]);

    $addlist = $classgroup->classlist()->create($data);

    return redirect('/myclass/' . $classgroup->id . '/list');
  }

  public function join(ClassGroup $classgroup)
  {
    $classID = $classgroup->id;
    return view('myclass.list.join', compact('classID'));
  }

  public function joinList(ClassGroup $classgroup)
  {
    $user=['list_id'=>Auth::user()->id];
    $validator = Validator::make($user,  [
      'list_id' => ['required', 'unique:class_lists,list_id,NULL,id,class_group_id,' . $classgroup->id],
    ], [
      'unique' => 'Bu Sınıfta Kayıtlısınız',
    ]);
    if ($validator->fails()){
      alert()->error('Başarısız İşlem','Bu Sınıfta Kayıtlısınız' , 'Type');
      return redirect('/myclass/' . $classgroup->id . '/list/join');
    }else{
      alert()->success('Başarılı','Sınıfa Katılım Tamamlandı');
      $classgroup->classlist()->create($user);
      return redirect('/myclass/' . $classgroup->id . '/list/join');
    }

  }

  public function destroy(ClassGroup $classgroup, ClassList $list)
  {
    $list->delete();
    return redirect($classgroup->path());
  }
}
