<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Application</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
	<link rel="stylesheet" href="css/datepicker.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">
	
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">


	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/append_work_school.js"></script>
</head>

<head>
<body id="page-top" class="index">
    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/hplogo.png" alt="">
                </div>
            </div>
        </div>
    </header>
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 profile">
				    <h3>PROFILE</h3>
				</div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                    <!--PROFILE-->		                       
    					<div class="row">
                            <div class="form-group col-md-6 floating-label-form-group controls">
    							<h5>Applying Position</h5>
    							<div class="btn-group">
    								<button type="button" id="applyingPosition" class="btn btn-default dropdown-toggle" data-toggle="dropdown" required data-validation-required-message="Please enter Applied Position">
                                        <span data-bind="label">Select One</span>&nbsp;<span class="caret"></span>
    								</button>
    								<ul class="dropdown-menu" role="menu">
                                        <li><a href="#">IOS Developer</a></li>
                                        <li><a href="#">PHP Developer</a></li>
                                        <li><a href="#">Content Writer</a></li>
    								</ul>	 
    							</div>
    							<p class="help-block text-danger"></p>
                                <div class="control-group">
        							<h5>First Name</h5>
                                    <input type="text" class="form-control" id="Fname">
                                    <p class="help-block text-danger"></p>
                                </div>		
                                <div class="control-group"> 
                                    <h5>Middle Name</h5>
                                    <input type="text" class="form-control" id="Mname">
                                </div>
                                <div class="control-group">	
    								<h5>Last Name</h5>
                                    <input type="text" class="form-control" id="Lname" >
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
    								<h5>Age</h5>
                                    <input type="text" class="form-control" id="age" >
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
    								<h5>Email Address</h5>
                                    <input type="email" name="email" class="form-control" id="Email" >
                                    <p class="help-block text-danger"></p>
                                </div> 						
                            </div>
                            <div class="form-group col-md-6 floating-label-form-group controls">
                                <div class="control-group">
    								<h5>Date Applied</h5>
    									<div class="input-append"  >
    										<input type="text" id="DateApplied" class="span2  date form-control" ><span class="add-on"><i class="icon-th"></i></span>
    									</div>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
    								<h5>Date of Birth</h5>
    										<div class="input-append" >
    											<input type="text" id="DoB" class="date span2 form-control" ><span class="add-on"><i class="icon-th"></i></span>
    										</div>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
    								<h5>Address</h5>
                                    <textarea rows="5" class="form-control" id="ApplicantAddress "></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
    								<h5>Contact Number</h5>
                                    <input type="number" class="form-control" id="ContactNum" placeholder="[ex. 09095531502]" >
                                    <p class="help-block text-danger"></p>
                                </div> 
                            </div>
                        </div>
                        <!--END PROFILE-->		
						
                        <!--EDUC ATTAINMENT-->		                        
            			<div id="educContainer">
            				<div class="col-lg-12 educ row">
            					<h3>EDUCATIONAL ATTAINMENT</h3>
                            </div>
                            <div class="row" id="educGroup">
                                <div class="close"></div>
                                <div class="form-group col-md-6 floating-label-form-group controls">
                                    <h5>Level</h5>
                                    <div class="btn-group">
                                        <button type="button" id="EducLevel" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <span data-bind="label">Select One</span>&nbsp;<span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="#">Elementary</a>LEVEL
                                            </li>
                                            <li>
                                                <a href="#">Secondary</a>
                                            </li>
                                            <li>
                                                <a href="#">Tertiary</a>
                                            </li>
                                            <li>
                                                <a href="#">Post Graduate</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="control-group">
                                        <h5>School/University</h5>
                                        <textarea rows="3" class="form-control" id="SchoolName" ></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 floating-label-form-group controls">
                                    <div class="control-group">
                                        <h5>School Year Graduated</h5>
                                        <input type="text" class="form-control" id="SchoolYr">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group"><h5>Address</h5><textarea rows="3" class="form-control" id="SchoolAddress" ></textarea><p class="help-block text-danger"></p></div>
                                </div>
                            </div>
            			</div>
                        <!--add another educational attainment !-->
                        <button type="add" id="AppendedSchool" class="btn btn-success btn-sm">Add School/University</button>
                        <!--END EDUC ATTAINMENT-->		
						
                        <!-- WORK EXPERIENCE-->						
            			<div id="workContainer">
            				<div class="col-lg-12 work">
            				   <h3>WORK EXPERIENCE</h3>
            				</div>
                            <div class="row" id="workGroup">
                                <div class="close"></div>
                                <div class="form-group col-md-6 floating-label-form-group controls">
                                    <div class="control-group">
                                        <h5>Position</h5>
                                        <textarea rows="2" class="form-control" id="WordPosition" ></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <h5>Company</h5>
                                        <input type="text" class="form-control" id="CompanyName" >
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <h5>Started</h5>
                                        <div class="input-append">
                                            <input type="text" id="WorkYrStarted" class="span2 form-control year">
                                            <span class="add-on"><i class="icon-th"></i></span>
                                        </div>
                                        <p class="help-block text-danger">
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 floating-label-form-group controls">
                                    <div class="control-group">
                                        <h5>Description of Tasks</h5>
                                        <textarea rows="5" class="form-control" id="DescTask" ></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <h5>Ended</h5>
                                        <input type="text" id="WorkYrEnded" class="span2 form-control year input-append">
                                        <span class="add-on"><i class="icon-th"></i></span>
                                    </div>
                                </div>
                            </div>
            			</div>
            			<button type="add" id="AppendWork" class="btn btn-success btn-sm">Add Work Experience</button>	
                        <!-- END WORK EXPERIENCE-->		
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12 text-center">
                                <button type="submit" id="BtnSave" class="btn btn-success btn-lg">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

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

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
		
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>
	
	<!-- Load jQuery and bootstrap datepicker scripts -->
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
		
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('.date').datepicker({
                    weekStart: 1,
                });
				
				$('.year').datepicker({
                    format: "mm-yyyy",
					viewMode: "months", 
					minViewMode: "months"
                });
            });
        </script>
		
</body>

</html>
