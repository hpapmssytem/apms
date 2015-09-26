<?php

namespace apms;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
	protected $fillable = [
		'name',
		'description',
		'status'
	];
	
    public function applicants()
    {
    	return $this->hasMany('apms\Applicant');
    }
}
