@extends('layouts.master')

@section('styles')
    <title>Edit Position</title>
    <style rel="stylesheet" type="text/css">
        .table-bordered{
            border: 1px solid #BBBBBB;
        }
        table-bordered>thead>tr>th, 
        .table-bordered>thead>tr>th, 
        table-bordered>tbody>tr>th, 
        .table-bordered>tbody>tr>th, 
        table-bordered>tfoot>tr>th, 
        .table-bordered>tfoot>tr>th, 
        table-bordered>thead>tr>td, 
        .table-bordered>thead>tr>td, 
        table-bordered>tbody>tr>td, 
        .table-bordered>tbody>tr>td, 
        table-bordered>tfoot>tr>td, 
        .table-bordered>tfoot>tr>td{
            border: 1px solid #BBBBBB; 
        }
    </style>
@endsection

@section('contents')
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ URL::route('positions.index')}}"><strong>← BACK</strong></a>
        </div>
    </div>
    <div class="row">
    	<div class="col-md-6">
    		{!! Form::model($position, array('method' => 'put', 'route' => 
    			['positions.update', $position->id], 'class' => 'form')) !!}

    			<div class="form-group">
    				<h5>Availability</h5>
                    {!! Form::select('status', 
                        array('0' => 'Unavailable', 
                              '1' => 'Available'), $position->status); !!}
    			</div>

    			<div class="form-group">
    				<h5>Position Name</h5>
    				{!! Form::text('name', null,
    					array('required', 'class' => 'form-control')) !!}
    			</div>

    			<div class="form-group">
    				<h5>Description</h5>
    				{!! Form::textarea('description', null,
    					array('required', 'class' => 'form-control')) !!}
    			</div>

    			<div class="form-group">
    				{!! Form::submit('Update Position', array('class'=>'btn btn-success btn-md')) !!}
    			</div>

    		{!! Form::close() !!}	
    	</div>
        <div class="col-md-6">
            <h5 class="text-center">Applicants for this position</h5>
            <table id="applicantTable" class="table table-hover table-bordered 
                table-striped dataTable no-footer">
                <thead>
                    <tr>
                        <th>Applicant ID</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($position->applicants as $applicant)
                        @if($applicant->status == 0)
                            <tr>
                                <td>
                                    <a href="{{ URL::action('ApplicantController@edit', [$applicant->id, 'from=position&value='.$position->id])}}">
                                        {{$applicant->id}}
                                    </a>
                                </td>
                                <td>{{ $applicant->fname." ".$applicant->lname}}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('jqueries') 
    <script type="text/javascript" src="https://cdn.datatables.net/r/dt/dt-1.10.9/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/dataTables.bootstrap.min.js"/></script>

    <script>
        $(document).ready(function(){
            $('#applicantTable').DataTable();
        });
    </script>
@endsection