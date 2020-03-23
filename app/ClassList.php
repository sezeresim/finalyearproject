<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassList extends Model
{
    protected $guarded=[];

    public function classgroup()
    {
        return $this->belongsTo(ClassGroup::class);
    }
}
