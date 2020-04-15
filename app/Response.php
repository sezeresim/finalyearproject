<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected  $guarded=[];

    public function survey()
    {
        return $this->belongsTo(Survey::class,'id','survey_id');
    }
}
