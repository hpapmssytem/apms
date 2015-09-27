@extends('layouts.master')

@section('styless')
    <title>Edit Applicant</title>
@endsection

@section('contents')
    <div class="col-lg-12">
        <a href="{{ URL::route('applicants.index') }}">← back</a>
    </div>
    <div class="col-lg-12">
        {!! Form::model($applicant, array('method' => 'PUT', 'route' => ['applicants.update', $applicant->id], 
            'class' => 'form')) !!}
            <h4>STATUS:</h4>

            {!! Form::select('status', 
                        array('0' => 'Applicant',
                              '1' => 'Employed',
                              '2' => 'Rejected',
                              '3' => 'End Of Contract',
                              '4' => 'Resigned'), $applicant->status)
            !!}
            <input type="submit" id="BtnSave" class="btn btn-success btn-md" value="Apply">
        {!! Form::close() !!}
    </div>

    <div class="col-lg-4">
        <h4>APPLICANT ID: {{ $applicant->id }}</h4>
    </div>
    <div class="col-lg-4">
        <h4>APPLIED FOR: {{ $applicant->position->name}}</h4>
    </div>
    <div class="col-lg-4">
        <h4>DATE APPLIED: {{ $applicant->date_applied }}</h4>
    </div>

    <div class="row">
        <div class="col-lg-12 profile">
		    <h3>PROFILE</h3>
		</div>
    </div>
    <div class="row col-lg-12">
        <div class="col-md-6">
            <p>NAME: {{ $applicant->fname." ".$applicant->mname." ".$applicant->lname}}</p>
            <p>AGE: {{ $applicant->age }}</p>
            <p>BIRTHDATE: {{ $applicant->birthdate }}</p>
        </div>
        <div class="col-md-6">
            <p>ADDRESS: {{ $applicant->address }} </p>
            <p>CONTACT NUMBER: {{ $applicant->contact_num }}</p>
            <p>EMAIL ADDRESS: {{ $applicant->email_add }}</p>
        </div>
    </div>
    
	<div class="row">
        <div class="col-lg-12 educ">
		    <h3>EDUCATIONAL ATTAINMENT</h3>
		</div>
    </div>
    <div class="row">
        <?php $counter = 1; ?>
        @foreach($applicant->educXps as $educXp)
            <div class="row col-md-12">
                <?php
                    if($counter > 1)
                    {
                        echo "<div class='col-lg-12'><hr /></div>";
                    }
                    $counter++;
                ?>
                <div class="col-md-6">
                    <p>LEVEL: {{ $educXp->level }}</p>
                    <p>SCHOOL/UNIVERSITY: {{ $educXp->school_name }} </p>
                </div>
                <div class="col-md-6">
                    <p>SCHOOL YR. GRADUATED: {{ $educXp->date_grad }}</p>
                    <p>SCHOOL ADDRESS: {{ $educXp->school_address }}</p>
                </div>
            </div>
        @endforeach
    </div>
            
	<div class="row">
        <div class="col-lg-12 work">
		    <h3>WORK EXPERIENCE</h3>
		</div>
    </div>
    <div class="row">
        <?php $counter = 1; ?>
        @foreach($applicant->workXps as $workXp)
            <div class="row col-md-12">
                <?php
                    if($counter > 1)
                    {
                        echo "<div class='col-lg-12'><hr /></div>";
                    }
                    $counter++;
                ?>
                <div class="col-md-6">
                    <p>POSITION: {{ $workXp->position }}</p>
                    <p>COMPANY: {{ $workXp->company_name }}</p>
                    
                </div>
                <div class="col-md-6">
                    <p>WORK STARTED: {{ $workXp->date_started }}</p>
                    <p>WORK ENDED: {{ $workXp->date_ended }}</p>
                </div>
                <div class="col-md-9">
                    <p>DESCRIPTION OF TASKS: <br/>{{ $workXp->task_description }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection