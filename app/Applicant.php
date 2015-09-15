<?php

namespace apms;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    public function position()
    {
    	return $this->belongTo('apms\Position');
    }

    public function educXps()
    {
    	return $this->hasMany('apms\EducXp');
    }

    public function workXps()
    {
    	return $this->hasMany('apms\WorkXp');
    }
}
