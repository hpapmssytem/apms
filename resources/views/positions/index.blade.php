@extends('layouts.master')
@section('styles')
    <title>Positions</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.9/css/dataTables.bootstrap.min.css"/>
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

    td {
        max-width: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    </style>
@endsection

@section('contents')
    <div class="row">
        <div class="col-lg-12">
            @if(Session::has('message'))
                <div class="alert alert-info">
                    {{ Session::get('message') }}
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
                    <li class="active"><a href="{{ URL::route('positions.index') }}">Positions</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ URL::to('auth/logout') }}">Logout</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!--SEARCH-->
    <div class="col-lg-12">
        <!--<input type="search" name="ApplicantSearch">
        <button id="BtnSubmitSearch" class="btn btn-success btn-sm">Search</button>-->
    </div>
    <!--END SEARCH -->

    <ul class="nav nav-pills">
        <li class="active"><a data-toggle="tab" href="#available">AVAILABLE</a></li>
        <li><a data-toggle="tab" href="#unavailable">UNAVAILABLE</a></li>
    </ul>

    <div class="tab-content">
        <div id="available" class="tab-pane fade in active">
            <h4>AVAILABLE POSITIONS</h4>
            <div class="row">
                <div class="col-lg-12 table-responsive">
                    <table id="availablePositions" class="table table-hover 
                            table-bordered table-striped dataTable no-footer">
                        <thead>
                            <tr>
                                <th>Position ID</th>
                                <th>Position name</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($positions as $position)
                                @if($position->status == 1)
                                    <tr>
                                        <td>
                                            <a href="{{ URL::route('positions.edit', $position->id) }}">
                                                {{ $position->id }}
                                            </a>
                                        </td>
                                        <td>{{ $position->name }}</td>
                                        <td>{{ $position->description }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="unavailable" class="tab-pane fade">
            <h4>UNAVAILABLE POSITIONS</h4>
            <div class="row">
                <div class="col-lg-12 table-responsive">
                    <table id="unavailablePositions" class="table table-hover 
                            table-bordered table-striped dataTable no-footer">
                        <thead>
                            <tr>
                                <th>Position ID</th>
                                <th>Position name</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($positions as $position)
                                @if($position->status == 0)
                                    <tr>
                                        <td>
                                            <a href="{{ URL::route('positions.edit', $position->id) }}">
                                                {{ $position->id }}
                                            </a>
                                        </td>
                                        <td>{{ $position->name }}</td>
                                        <td>{{ $position->description }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <a href="{{ URL::route('positions.create')}}">
                <input type="button" value="Add" id="BtnSave" class="btn btn-primary btn-default">
            </a>
            <br /><br />
        </div>
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
