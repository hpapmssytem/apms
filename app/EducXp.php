<?php

namespace apms;

use Illuminate\Database\Eloquent\Model;

class EducXp extends Model
{
    public function applicant()
    {
    	return $this->belongsTo('apms\Applicant');
    }
}
