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
  <script src="js/alert-message.js"></script>
</head>

    <header>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <img class="img-responsive" src="img/hplogo.png" alt="">
          </div>
        </div>
      </div>
    </header>

<body id="page-top" class="index">
  <!--START OF ADMIN -->          
  <div class="container">
    <div class="row">
      @if(Session::has('message'))
          <div class="alert alert-info">
              {{ Session::get('message') }}
          </div>
      @endif
    </div>
    <!--SEARCH-->
    <input type="search" name="ApplicantSearch">
    <button id="BtnSubmitSearch" class="btn btn-success btn-sm">Search</button>
    <!--END SEARCH -->

    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#applicant">APPLICANTS</a></li>
      <li><a data-toggle="tab" href="#employed">EMPLOYED</a></li>
      <li><a data-toggle="tab" href="#resigned">RESIGNED</a></li>
      <li><a data-toggle="tab" href="#eoc">END OF CONTRACT</a></li>
      <li><a data-toggle="tab" href="#rejected">REJECTED</a></li>
    </ul>

    <div class="tab-content">
      <div id="applicant" class="tab-pane fade in active">
        <h4>APPLICANTS</h4>
        <div class="row">
          <div class="col-lg-12">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Applicant ID</th>
                  <th>Applying Position</th>
                  <th>Name</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $counter = 1;
                ?>
                @foreach($applicants as $applicant)
                  <tr>
                      <td><?php echo $counter++; ?></td>
                      <td><a href="{{ URL::route('admin.edit', $applicant->id)}}">{{$applicant->id}}</a></td>
                      <td>{{ $applicant->position->name}}</td>
                      <td>{{ $applicant->fname." ".$applicant->lname}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div id="employed" class="tab-pane fade">
        <h4>EMPLOYED</h4>
        <div class="row">
          <div class="col-lg-12">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Applicant ID</th>
                  <th>Applying Position</th>
                  <th>Name</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>09876</td>
                  <td>IOS Developer</td>
                  <td>John Doe Smith</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div id="resigned" class="tab-pane fade">
        <h4>RESIGNED</h4>
        <div class="row">
          <div class="col-lg-12">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Applicant ID</th>
                  <th>Applying Position</th>
                  <th>Name</th>
                </tr>
              </thead>
              
              <tbody>
                <tr>
                  <td>1</td>
                  <td>09876</td>
                  <td>IOS Developer</td>
                  <td>John Doe Smith</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div id="eoc" class="tab-pane fade">
        <h4>END OF CONTRACT</h4>
        <div class="row">
          <div class="col-lg-12">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Applicant ID</th>
                  <th>Applying Position</th>
                  <th>Name</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>09876</td>
                  <td>IOS Developer</td>
                  <td>John Doe Smith</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div id="rejected" class="tab-pane fade">
        <h4>REJECTED</h4>
        <div class="row">
          <div class="col-lg-12">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Applicant ID</th>
                  <th>Applying Position</th>
                  <th>Name</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>09876</td>
                  <td>IOS Developer</td>
                  <td>John Doe Smith</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
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
