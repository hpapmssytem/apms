<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>List of Positions</title>

        <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
        <link rel="stylesheet" href="/css/datepicker.css">
        <link href="/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/css/freelancer.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
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


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

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
                    <a class="navbar-brand" href="#">Brand</a>
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
            <div class="row">
                @if(Session::has('message'))
                    <div class="alert alert-info">
                        {{ Session::get('message') }}
                    </div>
                @endif
            </div>
            <!--SEARCH-->
            <div class="col-lg-12">
                <!--<input type="search" name="ApplicantSearch">
                <button id="BtnSubmitSearch" class="btn btn-success btn-sm">Search</button>-->
            </div>
            <!--END SEARCH -->
            <div class="col-lg-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#available">AVAILABLE</a></li>
                    <li><a data-toggle="tab" href="#unavailable">UNAVAILABLE</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div id="available" class="tab-pane fade in active">
                    <div class="col-md-12">
                        <h4>AVAILABLE POSITIONS</h4>
                    </div>    
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
                    <div class="col-md-12">
                        <h4>UNAVAILABLE POSITIONS</h4>
                    </div>   
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
        <!--END OF ADMIN -->

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

        <!-- Custom Theme JavaScript -->
        <script src="/js/freelancer.js"></script>

        <!-- Load jQuery and bootstrap datepicker scripts -->
        <script src="/js/jquery-1.9.1.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="/js/alert-message.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/r/dt/dt-1.10.9/datatables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/dataTables.bootstrap.min.js"/></script>
        <script>
            $(document).ready(function(){
                $('#availablePositions').DataTable();
                $('#unavailablePositions').DataTable();
            });
        </script>
    </body>
</html>
