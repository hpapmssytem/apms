@extends('layouts.master')

@section('styles')
	<title>APMS | Sign-in</title>
@endsection

@section('contents')
    <div class="row">
        <div class="col-lg-12">
            @if(Session::has('message'))
                <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    {{ Session::get('message') }}
                    {{ Session::forget('message') }}
                </div>
            @endif
            @if(Session::has('alertMessage'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    {{ Session::get('alertMessage') }}
                    {{ Session::forget('alertMessage') }}
                </div>
            @endif
        </div>
    </div>
	<div class="col-lg-12">
        {!! Form::open(array('url' => '/auth/login', 'class' => 'form')) !!}

        <h1>Admin Sign-in</h1>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                There were some problems signing into your account:
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            {!! Form::label('email', 'Your E-mail Address') !!}
            {!! Form::text('email', null,
                array('class'=>'form-control', 'placeholder'=>'E-mail')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Your Password') !!}
            {!! Form::password('password',
                array('class'=>'form-control', 'placeholder'=>'Password')) !!}
        </div>

        <div class="form-group">
            <label>
                {!! Form::checkbox('remember', 'remember') !!} Remember Me
            </label>
        </div>

        <div class="form-group">
            {!! Form::submit('Login', array('class'=>'btn btn-primary')) !!}
        </div>

        <!--<a href="/password/email">Forgot Your Password?</a>-->

        {!! Form::close() !!}
    </div>
@endsection