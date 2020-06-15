<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyUser extends Model
{
    protected $guarded = [];

    public function questionarea()
    {
        $this->belongsTo(QuestionArea::class);
    }
}
