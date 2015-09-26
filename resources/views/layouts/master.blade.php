<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">


    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
	<link rel="stylesheet" href="/css/datepicker.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link href="/css/freelancer.css" rel="stylesheet">
	
    <!-- Custom Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    @yield('styles')  
</head>
<body id="page-top" class="index">
	<!-- Header -->
	<header>
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-12">
	                <img class="img-responsive" src="/img/hplogo.png" alt="">
	            </div>
	        </div>
	    </div>
	</header>
	<!-- End Header -->

	@yield('warningMsg')

	<!-- Main Contents -->
    <div class="container">

		@yield('contents')

    </div>
    <!-- End main contents -->

	<!-- Footer -->
	<footer class="text-center">
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

	<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!--<script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>-->

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript 
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    -->

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
	@yield('jqueries')
</html>