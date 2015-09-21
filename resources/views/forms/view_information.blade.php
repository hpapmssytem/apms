<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Applicant Records</title>

        <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    	<link href="/css/datepicker.css" rel="stylesheet">
        <link href="/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/css/freelancer.css" rel="stylesheet">
    	
        <!-- Custom Fonts -->
        <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">


    	
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    </head>

    <body id="page-top" class="index">

        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <img class="img-responsive" src="/img/hplogo.png" alt="">
                    </div>
                </div>
            </div>
        </header>

    <!--START OF VIEW -->
        <div class="container">
            <div class="col-md-12">
                <!--<form method="PUT" action="{{ URL::route('form.update', $applicant->id) }}">-->
                {!! Form::model($applicant, array('method' => 'PUT', 'route' => ['admin.update', $applicant->id], 
                    'class' => 'form')) !!}
                    <h4>STATUS:</h4>
                    <select name="status" id="AppStatus">
                        <option value="1">APPLICANT</option>
                        <option value="2">EMPLOYED</option>
                        <option value="3">END OF CONTRACT</option>
                        <option value="4">REJECTED</option>
                    </select>
                    <!--<button id="BtnNext" class="btn btn-success btn-md"> SAVE </button>-->
                    <input type="submit" id="BtnSave" class="btn btn-success btn-md" value="Apply">
                {!! Form::close() !!}
            </div>

            <div class="col-lg-4">

                <h4>APPLICANT ID: {{ $applicant->id }}</h4>
            </div>
            <div class="col-lg-4">
                <h4>APPLIED FOR: {{ $applicant->position->name}}</h4>
            </div>
            <div class="col-lg-4">
                <h4>DATE APPLIED: {{ $applicant->date_applied }}</h4>
            </div>

            <div class="col-lg-12 profile">
                <h3>PROFILE</h3>
            </div>
            <div class="row col-md-12">
                <div class="col-md-6">
                    <p>NAME: {{ $applicant->fname." ".$applicant->mname." ".$applicant->lname}}</p>
                    <p>AGE: {{ $applicant->age }}</p>
                    <p>BIRTHDATE: {{ $applicant->birthdate }}</p>
                </div>
                <div class="col-md-6">
                    <p>ADDRESS: {{ $applicant->address }} </p>
                    <p>CONTACT NUMBER: {{ $applicant->contact_num }}</p>
                    <p>EMAIL ADDRESS: {{ $applicant->email_add }}</p>
                </div>
            </div>
    
            <div class="col-lg-12 educ">
                <h3>EDUCATIONAL ATTAINMENT</h3>
            </div>
            @foreach($applicant->educXps as $educXp)
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <p>LEVEL: {{ $educXp->level }}</p>
                        <p>SCHOOL/UNIVERSITY: {{ $educXp->school_name }} </p>
                    </div>
                    <div class="col-md-6">
                        <p>SCHOOL YR. GRADUATED: {{ $educXp->date_grad }}</p>
                        <p>SCHOOL ADDRESS: {{ $educXp->school_address }}</p>
                    </div>
                </div>
            @endforeach

            <div class="col-lg-12 work">
                <h3>WORK EXPERIENCE</h3>
            </div>
            @foreach($applicant->workXps as $workXp)
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <p>POSITION: {{ $workXp->position }}</p>
                        <p>COMPANY: {{ $workXp->company_name }}</p>
                        
                    </div>
                    <div class="col-md-6">
                        <p>WORK STARTED: {{ $workXp->date_started }}</p>
                        <p>WORK ENDED: {{ $workXp->date_ended }}</p>
                    </div>

                    <p>DESCRIPTION OF TASKS: {{ $workXp->task_description }}</p>
                </div>
            @endforeach
        </div>

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
    <!--END OF VIEW --> 

    <!-- jQuery -->
        <script src="/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery-1.9.1.min.js"></script>
        <script src="/js/bootstrap-datepicker.js"></script>

        <!-- Plugin JavaScript -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="/js/classie.js"></script>
        <script src="/js/cbpAnimatedHeader.js"></script>

        <!-- Contact Form JavaScript -->
        <!--<script src="/js/jqBootstrapValidation.js"></script>
        <script src="/js/contact_me.js"></script>-->

        <!-- Custom Theme JavaScript -->
        <script src="/js/freelancer.js"></script>
        
        <!-- Load jQuery and bootstrap -->
        <script src="/js/jquery-1.9.1.min.js"></script>
    </body>
</html>