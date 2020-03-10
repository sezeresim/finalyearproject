<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $guarded=[];

    public function test(){
        return $this->belongsTo(Question::class);
    }
}
