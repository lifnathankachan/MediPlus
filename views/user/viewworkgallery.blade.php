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
                             
                                <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                                <span>Log Out</span>
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                </li>
                                
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


<br>
<br>
<br>
<br>
<br>
<br>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Balay Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/work/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/work/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/work/css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/work/css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/work/fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/work/css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/work/css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/work/css/style.css">

	<!-- Modernizr JS -->
	<script src="jswork/js//modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>


		<div id="colorlib-main">
			<div class="colorlib-work">
				<div class="colorlib-narrow-content">
			
					
					<div class="row row-bottom-padded-md">
					<?php
 
 //  $st=DB::select("select * from  tbl_works");
  $st1=DB::select("select * from tbl_contractorgallery");
  foreach($st1 as $row)
   {
   ?>

<a  href="/cdetails?gallery_id={{$row->gallery_id}}"> <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
  <div class="project" style="background-image: url(images/img-1.jpg);">
							<img src="/images/<?php echo $row->image; ?>"   height="250px" width="300px">
							
								<div class="desc">
								
								</div>
							</div>
							
						</div></a>
						<?php
  }
  ?>
						
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<ul class="pagination">
								<li class="disabled"><a href="#">&laquo;</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">&raquo;</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			

			<div id="get-in-touch" class="colorlib-bg-color">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<h2>Get in Touch!</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<p class="colorlib-lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<p><a href="#" class="btn btn-primary btn-learn">Contact me!</a></p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="js/work/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/work/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/work/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/work/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/work/js/jquery.flexslider-min.js"></script>
	<!-- Sticky Kit -->
	<script src="js/work/js/sticky-kit.min.js"></script>
	<!-- Owl carousel -->
	<script src="js/work/js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="js/work/js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/work/js/main.js"></script>

	</body>
</html>

