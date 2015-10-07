@extends('layouts.master')

@section('styles')
	<title>List of Applicants</title>

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
	</style>
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
					<li class="active"><a href="{{ URL::route('applicants.index') }}">Applicants <span class="sr-only">(current)</span></a></li>
					<li><a href="{{ URL::route('positions.index') }}">Positions</a></li>
					<li><a href="{{ URL::route('links.index') }}">Send Email</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{ URL::to('auth/logout') }}">Logout</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<!--SEARCH-->
	<!--<input type="search" name="ApplicantSearch">
	<button id="BtnSubmitSearch" class="btn btn-success btn-sm">Search</button>
	END SEARCH -->

	<ul class="nav nav-pills">
		<li class="active"><a data-toggle="tab" href="#applicant">APPLICANTS</a></li>
		<li><a data-toggle="tab" href="#employed">EMPLOYED</a></li>
		<li><a data-toggle="tab" href="#resigned">REJECTED</a></li>
		<li><a data-toggle="tab" href="#eoc">END OF CONTRACT</a></li>
		<li><a data-toggle="tab" href="#rejected">RESIGNED</a></li>
	</ul>

	<div class="tab-content">
		<div id="applicant" class="tab-pane fade in active">
			<h4>APPLICANTS</h4>
			<div class="row">
				<div class="col-lg-12 table-responsive">
					<table id="applicantTable" class="table table-hover table-bordered table-striped 
									 dataTable no-footer">
						<thead>
							<tr>
								<th>Applicant ID</th>
								<th>Name</th>
								<th>Applying Position</th>
							</tr>
						</thead>
						<tbody>
							@foreach($applicants as $applicant)
								@if($applicant->status == 0)
									<tr>
										<td><a href="{{ URL::action('ApplicantController@edit', [$applicant->id, 'from=applicants'])}}">{{$applicant->id}}</a></td>
										<td>{{ $applicant->fname." ".$applicant->lname}}</td>
										<td>{{ $applicant->position->name}}</td>
									</tr>
								@endif
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="employed" class="tab-pane fade">
			<h4>EMPLOYED</h4>
			<div class="row">
				<div class="col-lg-12 table-responsive">
					<table id="employedTable" class="table table-bordered table-hover table-striped 
									 dataTable no-footer">
						<thead>
							<tr>
								<th>Applicant ID</th>
								<th>Name</th>
								<th>Applying Position</th>
							</tr>
						</thead>
						<tbody>
							@foreach($applicants as $applicant)
								@if($applicant->status == 1)
									<tr>
										<td><a href="{{ URL::action('ApplicantController@edit', $applicant->id)}}">{{$applicant->id}}</a></td>
										<td>{{ $applicant->fname." ".$applicant->lname}}</td>
										<td>{{ $applicant->position->name}}</td>
									</tr>
								@endif
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="resigned" class="tab-pane fade">
			<h4>REJECTED</h4>
			<div class="row">
				<div class="col-lg-12 table-responsive">
					<table id="rejectedTable" class="table table-hover table-bordered table-striped 
									 dataTable no-footer">
						<thead>
							<tr>
								<th>Applicant ID</th>
								<th>Name</th>
								<th>Applying Position</th>
							</tr>
						</thead>
						<tbody>
							@foreach($applicants as $applicant)
								@if($applicant->status == 2)
									<tr>
										<td><a href="{{ URL::action('ApplicantController@edit', $applicant->id)}}">{{$applicant->id}}</a></td>
										<td>{{ $applicant->fname." ".$applicant->lname}}</td>
										<td>{{ $applicant->position->name}}</td>
									</tr>
								@endif
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="eoc" class="tab-pane fade">
			<h4>END OF CONTRACT</h4>
			<div class="row">
				<div class="col-lg-12 table-responsive">
					<table id="endOfContractTable" class="table table-hover table-bordered table-striped 
									 dataTable no-footer">
						<thead>
							<tr>
								<th>Applicant ID</th>
								<th>Name</th>
								<th>Applying Position</th>
							</tr>
						</thead>
						<tbody>
							@foreach($applicants as $applicant)
								@if($applicant->status == 3)
									<tr>
										<td><a href="{{ URL::action('ApplicantController@edit', $applicant->id)}}">{{$applicant->id}}</a></td>
										<td>{{ $applicant->fname." ".$applicant->lname}}</td>
										<td>{{ $applicant->position->name}}</td>
									</tr>
								@endif
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="rejected" class="tab-pane fade">
			<h4>RESIGNED</h4>
			<div class="row">
				<div class="col-lg-12 table-responsive">
					<table id="resignedTable" class="table table-hover table-bordered table-striped 
									 dataTable no-footer">
						<thead>
							<tr>
								<th>Applicant ID</th>
								<th>Name</th>
								<th>Applying Position</th>
							</tr>
						</thead>
						<tbody>
							@foreach($applicants as $applicant)
								@if($applicant->status == 4)
									<tr>
										<td><a href="{{ URL::action('ApplicantController@edit', $applicant->id)}}">{{$applicant->id}}</a></td>
										<td>{{ $applicant->fname." ".$applicant->lname}}</td>
										<td>{{ $applicant->position->name}}</td>
									</tr>
								@endif
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('jqueries')
	<script src="/js/alert-message.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/r/dt/dt-1.10.9/datatables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/dataTables.bootstrap.min.js"/></script>

	<script>
		$(document).ready(function(){
			$('#applicantTable').DataTable();
			$('#employedTable').DataTable();
			$('#rejectedTable').DataTable();
			$('#endOfContractTable').DataTable();
			$('#resignedTable').DataTable();
		});
	</script>
@endsection
