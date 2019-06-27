
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
    </head>
    <body>
       
       
        <!--================Header Area =================-->
        <header class="main_header_area">
            <div class="header_top_area">
                <div class="container">
                    <div class="pull-left">
                        <a href="#"><i class="fa fa-phone"></i>8592850095</a>
                        <a href="#"><i class="fa fa-map-marker"></i>673603 Calicut,Kerala</a>
                        <!-- <a href="#"><i class="mdi mdi-clock"></i></a> -->
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
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="index.html">Home 01</a></li>
                                        <li><a href="index-2.html">Home 02</a></li>
                                    </ul> -->
                                </li>
                                <!-- <li >
                                    <a href="usersignup" >Register</a>
                                <ul class="dropdown-menu">
                                       <li><a href="project-full-width.html">Admin</a></li>
                                        <li><a href="userlogin">User</a></li>
                                        <li><a href="project-grid-two-column.html">Contractor</a></li>
                                        <li><a href="project-three-column.html">Labours</a></li>
                                        <li><a href="project-single.html">Shop</a></li>
                                    </ul>
                                </li> -->
                                
                                <li><a href="viewconfirmorder"> View confirm order</a></li>
                                <li><a href="viewdeclainorder"> View declain order</a></li>
                                <li><a href="viewworkgallery">View workgallery</a></li>
                                <li><a href="viewcontractor">Booking</a></li>
                               
                                <!-- <li><a href="#">about us</a></li> -->
                                <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                                <span>Log Out</span>
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                </li>
                                <!-- <li><a href="#">Contact</a></li> -->
                                <!-- <li class="icon_search"><a href="#"><i class="mdi mdi-cart"></i></a></li> -->
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </header>
        <!--================Header Area =================-->
       
        @yield('content')
      
        <!--================Address Area =================-->
	<body>

								
                <br><br>
                <br><br>
                <br><br>
                <br><br>
							<h2 class="colorlib-heading animate-box">Recent Works Uploaded</h2>
						
                    <?php
 
 foreach($st as $row)
  {
     $id= $row->gallery_id;
     
      $cid= $row->contractor_id;
      
	  $desc= $row->desc;
	//  $st1=DB::select("select * from tbl_registers,tbl_users where tbl_registers.id=tbl_users.id and tbl_users.id='$id'");
 $st2=DB::select("select * from  tbl_contractor,tbl_contractorgallery where tbl_contractor.id=tbl_contractorgallery.contractor_id and tbl_contractorgallery.contractor_id='$cid'");
	//   foreach($st1 as $row1)
	  foreach($st2 as $row2)
 ?>
                    <!-- Start project-details Area -->
			<section class="project-details-area section-gap">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 project-details-left">
							<img class="img-fluid"  src="/images/<?php echo $row->image; ?>" alt=""height="400px" width="350px" >
						</div>
						<div class="col-lg-6 project-details-right">
						<h7>Contractor Name:<h7>	<h3 class="pb-20"><?php echo $row2->contractor_name; ?></h3>
						
                            <p>
							<?php echo $row->desc; ?>
							</p>
						<!-- <p>
                       <?php /*echo $row->contractor_landmark */?>
                        </p> -->
									
																					
						</div>
					
							<p><br>
							
					
<!-- 								
							<div class="form-group">
							<a class="btn btn-primary btn-send-message" href="/selectdate?gallery_id={{$row->gallery_id}}">Take An Appointment Now</a>
										
								</div> -->
								
							</p>
						</div>
					</div>
				</div>	
			</section>
			<!-- End project-details Area -->
 <?php
  }
  ?>
						
					</div>
				</div>
			</div>

	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Sticky Kit -->
	<script src="js/sticky-kit.min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

