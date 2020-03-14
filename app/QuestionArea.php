<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questionArea extends Model
{
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function surveys()
    {
        return $this->hasMany( Survey::class);
    }
}
