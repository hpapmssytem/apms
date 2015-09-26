<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

		<title>APMS | Registration</title>

		<!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
        <link rel="stylesheet" href="/css/datepicker.css">
        <link href="/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/css/freelancer.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	</head>

	<header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="/img/hplogo.png" alt="">
                </div>
            </div>
        </div>
    </header>

	<body id="page-top" class="index">

        <!--START OF ADMIN -->
        <div class="container">
        	<div class="col-md-6">
        		{!! Form::open(array('url' => '/auth/register', 'class' => 'form')) !!}

        		<h1>Register Admin</h1>

        		@if (count($errors) > 0)
        			<div class="alert alert-danger">
        				There were some problems creating an account:
        				<ul>
        					@foreach ($errors->all() as $error)
        						<li>{{ $error }}</li>
        					@endforeach
        				</ul>
        			</div>
        		@endif

        		<div class="form-group">
        			{!! Form::label('name', 'Your Name') !!}
        			{!! Form::text('name', null, array('class'=>'form-control', 'placeholder'=>'Name')) !!}
        		</div>

        		<div class="form-group">
        			{!! Form::label('Your E-mail Address') !!}
        			{!! Form::text('email', null,
        				array('class'=>'form-control', 'placeholder'=>'Email Address')) !!}
        		</div>

        		<div class="form-group">
        			{!! Form::label('Your Password') !!}
        			{!! Form::password('password',
        				array('class'=>'form-control', 'placeholder'=>'Password')) !!}
        		</div>

        		<div class="form-group">
        			{!! Form::label('Confirm Password') !!}
        			{!! Form::password('password_confirmation',
        				array('class'=>'form-control', 'placeholder'=>'Confirm Password')) !!}
        		</div>

        		<div class="form-group">
        			{!! Form::submit('Create My Account!',
        				array('class'=>'btn btn-primary')) !!}
        		</div>

        		{!! Form::close() !!}
			</div>
        </div>

        <footer class="text-center footer">
            <div class="footer-below">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h6>HP OUTSOURCING PHILS., INC 2015</h6>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
	</body>
</html>