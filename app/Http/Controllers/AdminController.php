<?php

namespace apms\Http\Controllers;

use Illuminate\Http\Request;

use apms\Http\Requests;
use apms\Http\Controllers\Controller;

use apms\Applicant;

class AdminController extends Controller
{
    public function index()
    {
    	$applicants = Applicant::select(
    		'id', 
    		'fname', 
    		'lname', 
    		'position_id')->get();

    	return view('forms.admin')->with('applicants', $applicants);
    }
}
