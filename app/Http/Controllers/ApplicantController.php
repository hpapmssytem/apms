<?php

namespace apms\Http\Controllers;

use Illuminate\Http\Request;

use apms\Http\Requests;
use apms\Http\Controllers\Controller;

use apms\Applicant;
use Input;

class ApplicantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('confirm');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $applicants = Applicant::select(
            'id', 
            'fname', 
            'lname', 
            'position_id',
            'status')->get();

        return view('applicants.admin')->with('applicants', $applicants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $applicant = Applicant::findOrFail($id);

        return view('applicants.view_information')->with('applicant', $applicant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $applicant = Applicant::find($id);

        $applicant->status = Input::get('status');
        $applicant->save();

        return \Redirect::route('applicants.index')
            ->with('message', 'Applicant has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
