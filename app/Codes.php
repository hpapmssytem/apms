<?php

namespace apms;

use Illuminate\Database\Eloquent\Model;

class Codes extends Model
{
	protected $fillable = [
		'code',
		'email_add',
		'applicant_id',
		'status'
	]

    public function applicant()
    {
    	return $this->belongsTo('apms\Applicant');
    }
}
