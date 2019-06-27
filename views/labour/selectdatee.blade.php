<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Construction - WeBuilder Template</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/materialdesignicons.min.css" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        <link href="vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script>
            var msg='{{Session::get('alert')}}';
            var exist='{{Session::has('alert')}}';
            if(exist){
                alert(msg);
            }
      </script>
            
    </head>
    <body>
       
       
        <!--================Header Area =================-->
        <header class="main_header_area">
            <div class="header_top_area">
                <div class="container">
                    <div class="pull-left">
                        <a href="#"><i class="fa fa-phone"></i>8592850095</a>
                        <a href="#"><i class="fa fa-map-marker"></i>673603,calicut,Kerala,India</a>
                        <!-- <a href="#"><i class="mdi mdi-clock"></i>08 AM - 10 PM</a> -->
                    </div>
                    <div class="pull-right">
                        <ul class="header_social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main_menu_area">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown submenu active">
                                    <a href="labourhome" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="index.html">Home 01</a></li>
                                        <li><a href="index-2.html">Home 02</a></li>
                                    </ul> -->
                                </li>
                                <li >
                                    <a href="profile" >View Profile</a>
                               <!-- <ul class="dropdown-menu">
                                       <li><a href="project-full-width.html">Admin</a></li>
                                        <li><a href="userlogin">User</a></li>
                                        <li><a href="project-grid-two-column.html">Contractor</a></li>
                                        <li><a href="project-three-column.html">Labours</a></li>
                                        <li><a href="project-single.html">Shop</a></li>
                                    </ul>-->
                                </li>
                                <li><a href="confirmlabour"> view confirm request</a></li>
                                <li><a href="declainlabour">view declain request</a></li>
                                <li><a href="Viewcontractorprofile">search contractor</a></li>
                                <li><a href="viewcontra">Book contractor</a></li>
                                
                                <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                                <span>Log Out</span>
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                </li>
                                
                                <li class="icon_search"><a href="#"><i class="mdi mdi-cart"></i></a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </header>

        <!--================Header Area =================-->
       
        @yield('content')
      
        <!--================Address Area =================-->

        <br>                 
                   
        <br> 
                   <br> 
                   <br> 
                   <br> 
                   <br> 
                   <br> 
                   <br> 
                   <br>   {{ Auth::user()->email }} <span class="caret"></span>
                                </a>

                               

                     

                                
                                       

        
        <div class="limiter">
		<div class="container-login100" style="background-image: url('{{ asset('logtem/images/bg-01.jpg')}}');" >
                    <form action="/selectdateee"  method="post">
                    <div class="box-title" margin-top ><center><h3 class="pb-5"><b>Select Appointment date....</b></h3></center>
            </div>
                    @csrf
                    <input hidden name="cid" value={{$cid}}>
                    <?php $today=date("Y-m-d"); ?>
                        <input type="date" name="date" id="datepicker" placeholder="Pick a Date"  min="<?php echo $today; ?>" class="form-control" required>
                        <br>
                        <div class="alert alert-info" id="userInfo">
                            Select a date to Continue!
                        </div>
                        </br>
                        <input hidden name="time" value="0" id="b-time">
                        </br>
                        <div class="text-center">
                        <input type="submit" id="confirm-booking" class="btn btn-primary btn-sm" readonly value="Confirm Booking">
                    </div>
                    </form>

            </div>
            </div>
        </main>
    </div>


    <script language="JavaScript" type="text/javascript">
   function checkDate(ElId){
                    // var today = new Date();
                    //   var dd = String(today.getDate()).padStart(2, '0');
                    //   var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                    //   var yyyy = today.getFullYear();

                    //   today = mm + '/' + dd + '/' + yyyy;
                    //   $("#event_date").attr("value", today);
                    //   alert(today);
   var date = new Date($("#event_date").val());
   day = date.getDate();
  month = date.getMonth() + 1;
  year = date.getFullYear();
  today = year+ '-' + month + '-' + day;

                    $.ajax({
                        type:'POST',
                        url:'/selectdate',
                        data:{ date : today },
                        success:function(response) {
                            if(response == "false"){
                                alert("Please enter a valid date!");
                            }
                            else if(response == "na"){
                                alert("The auditorium is not available at the selected date. please select another date.");
                                $("#event_date").val("");
                            }
                            else{
                                alert(response);
                            }

                        }
                        });






                    }
                    </script>
    
</body>
</html>