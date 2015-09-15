<?php

namespace apms;

use Illuminate\Database\Eloquent\Model;

class WorkXp extends Model
{
    public function applicant()
    {
    	return $this->belongsTo('apms\Applicant');
    }
}
