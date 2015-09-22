<?php

namespace apms;

use Illuminate\Database\Eloquent\Model;

class EducXp extends Model
{
	protected $fillable = [
		'level',
		'school_name',
		'school_address',
		'date_grad'
	];

    public function applicant()
    {
    	return $this->belongsTo('apms\Applicant');
    }
}
