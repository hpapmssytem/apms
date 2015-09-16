<?php

namespace apms;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'age',
        'birthdate',
        'date_applied',
        'address',
        'contact_num',
        'email_add',
        'position_id',
        'status'
    ];

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
