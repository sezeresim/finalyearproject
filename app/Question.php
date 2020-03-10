<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded=[];

    public function questionArea(){
        return $this->belongsTo(QuestionArea::class);
    }

    public function answers(){
        return $this->hasMany(Answer::class);
    }
}
