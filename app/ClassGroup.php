<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ClassGroup extends Model
{
    protected $guarded=[];

    public function publicPath(){
        return url('/myclass/'.$this->id.'-'. Str::slug($this->name));
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function members()
    {
        return $this->hasMany(ClassList::class);
    }
}
