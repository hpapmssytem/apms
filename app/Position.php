<?php

namespace apms;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function applicants()
    {
    	return $this->hasMany('apms\Applicant');
    }
}
