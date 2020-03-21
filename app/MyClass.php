<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyClass extends Model
{
    protected $guarded=[];

    public function myclassgroup()
    {
        return $this->belongsTo(MyClassGroup::class);
    }
}
