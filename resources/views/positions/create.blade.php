@extends('layouts.master')

@section('styles')
    <title>Add New Position</title>
@endsection

@section('contents')
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ URL::route('positions.index')}}">← back</a>
        </div>
    </div>
	<div class="row">
		<div class="col-lg-12">
			{!! Form::open(array('route' => 'positions.store', 'class' => 'form')) !!}

				<div class="form-group">
					<h5>Availability</h5>
					<select name="status">
						<option value="0">Unavailable</option>
						<option value="1">Available</option>
					</select>
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
					{!! Form::submit('Create Position', array('class'=>'btn btn-success btn-md')) !!}
				</div>

			{!! Form::close() !!}	
		</div>
	</div>
@endsection