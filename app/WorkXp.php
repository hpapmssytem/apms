<?php

namespace apms;

use Illuminate\Database\Eloquent\Model;

class WorkXp extends Model
{
	protected $fillable = [
		'position',
		'company_name',
		'task_description',
		'date_started',
		'date_ended'
	];
    public function applicant()
    {
    	return $this->belongsTo('apms\Applicant');
    }
}
