<?php

namespace apms\Http\Controllers;

use Illuminate\Http\Request;

use apms\Http\Requests;
use apms\Http\Controllers\Controller;

use apms\Position;

class WelcomeController extends Controller
{
	/**
	* Display main page
	* @return Response
	**/
	public function index()
	{
		$positions = Position::select('id', 'name')->get();
        return view('forms.index')->with('positions', $positions);
	}    
}
