<?php

namespace apms\Http\Controllers;

use Illuminate\Http\Request;

use apms\Http\Requests;
use apms\Http\Controllers\Controller;

use apms\Http\Requests\ApplicationFormRequest;

//Necessary models
use apms\Applicant;
use apms\Position;
use apms\EducXp;
use apms\WorkXp;

use Input;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $positions = Position::select('id', 'name')->Where('status', '1')->get();

        return view('forms.index')->with('positions', $positions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('forms.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ApplicationFormRequest  $request
     * @return Response
     */
    public function store(ApplicationFormRequest $request)
    {
        //save applicant main profile
        $applicant = new Applicant(array(
            'fname'         => $request->get('fname'),
            'mname'         => $request->get('mname'),
            'lname'         => $request->get('lname'),
            'age'           => $request->get('age'),
            'birthdate'     => $request->get('birthdate'),
            'date_applied'  => $request->get('date_applied'),
            'address'       => $request->get('address'),
            'contact_num'   => $request->get('contact_num'),
            'email_add'     => $request->get('email_add'),
            'position_id'   => $request->get('position_id'),
            'status'        => 0
        ));

        $applicant->save();

        //get educational attinment(s)
        $level      = Input::get('level');
        $schoolname = Input::get('school_name');
        $yeargrad   = Input::get('year_grad');
        $schooladd  = Input::get('school_address');

        //add each attainment to the current profile
        foreach ($schoolname as $key => $n) 
        {
            $educxp = new EducXp(array(
                'level'          => $level[$key],
                'school_name'    => $schoolname[$key],
                'date_grad'      => $yeargrad[$key],
                'school_address' => $schooladd[$key]
            ));

            $applicant->educXps()->save($educxp);
        }

        //get work experience(s)
        $position = Input::get('position');
        $company  = Input::get('company_name');
        $task     = Input::get('task_description');
        $start    = Input::get('date_started');
        $end      = Input::get('date_ended');

        //add each work to the current profile
        foreach ($position as $key => $n) 
        {
            $workxp = new WorkXp(array(
                'position'         => $position[$key],
                'company_name'     => $company[$key],
                'task_description' => $task[$key],
                'date_started'     => $start[$key],
                'date_ended'       => $end[$key]
            ));

            $applicant->workXps()->save($workxp);
        }

        return \Redirect::route('form.index')
            ->with('message', 'Your application has been created!');
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

        return view('forms.view_information')->with('applicant', $applicant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update($id, ApplicationFormRequest $request)
    {
        $applicant = Applicant::find($id);

        $applicant->status = 2;
        $applicant->save();
        
        return \Redirect::route('form.index')
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
