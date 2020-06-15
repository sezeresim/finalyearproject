<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected  $guarded = [];

    public function questionarea()
    {
        return $this->belongsTo(QuestionArea::class);
    }
    public function responses()
    {
        return $this->hasMany(SurveyResponse::class);
    }
}
