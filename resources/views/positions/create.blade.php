<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Add New Position</title>

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
		
		<div class="container">
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
        <!--END OF ADMIN -->

        <!-- jQuery -->
        <script src="/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery-1.9.1.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="/js/classie.js"></script>
        <script src="/js/cbpAnimatedHeader.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="/js/freelancer.js"></script>

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	</body>
</html>