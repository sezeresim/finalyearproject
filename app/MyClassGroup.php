<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyClassGroup extends Model
{
    protected $guarded=[];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function members()
    {
        return $this->hasMany(MyClass::class);
    }

}
