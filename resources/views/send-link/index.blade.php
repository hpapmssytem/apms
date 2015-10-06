@extends('layouts.master')

@section('styles')
    <title>Send a Link</title>
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
        </div>
    </div>
    
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::to('/') }}">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::route('applicants.index') }}">Applicants <span class="sr-only">(current)</span></a></li>
                    <li><a href="{{ URL::route('positions.index') }}">Positions</a></li>
                    <li class="active"><a href="{{ URL::route('links.index') }}">Send Email</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ URL::to('auth/logout') }}">Logout</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="row">
        {!! Form::open(array('route' => 'links.store', 'class' => 'form')) !!}    
            <div class="col-md-4">
                <div class="form-group">
                    <h5 style="display:inline;">Email Address</h5>
                    {!! Form::email('email', null,
                        array('required',
                              'class' => 'form-control'))
                    !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Send', array('class'=>'btn btn-success btn-md')) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>
    
@endsection

@section('jqueries')
    <script src="/js/alert-message.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/r/dt/dt-1.10.9/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/dataTables.bootstrap.min.js"/></script>
    <script>
        $(document).ready(function(){
            $('#availablePositions').DataTable();
            $('#unavailablePositions').DataTable();
        });
    </script>
@endsection
