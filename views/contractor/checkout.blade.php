
<!DOCTYPE html>
<html lang="en">

    <head>
	<script>
            var msg='{{Session::get('alert')}}';
            var exist='{{Session::has('alert')}}';
            if(exist){
                alert(msg);
            }
      </script>
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
                        <!-- <a href="#"><i class="fa fa-phone"></i>(012) - 3456789</a>
                        <a href="#"><i class="fa fa-map-marker"></i>1234 Cafficic, California</a> -->
                        <a href="#"><i class="mdi mdi-clock"></i>08 AM - 10 PM</a>
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
                                    <ul class="dropdown-menu">
                                        <!-- <li><a href="index.html">Home 01</a></li>
                                        <li><a href="index-2.html">Home 02</a></li> -->
                                    </ul>
                                </li>
                                <li >
                                    <a href="Viewbooking" >view Appoinment</a>
                               <!-- <ul class="dropdown-menu">
                                       <li><a href="project-full-width.html">Admin</a></li>
                                        <li><a href="userlogin">User</a></li>
                                        <li><a href="project-grid-two-column.html">Contractor</a></li>
                                        <li><a href="project-three-column.html">Labours</a></li>
                                        <li><a href="project-single.html">Shop</a></li>
                                    </ul>-->
                                </li>
                                <li><a href="addgallery">Add working Gallery</a></li>
                                <li><a href="viewshop">View Shop</a></li>
                                <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                                <span>Log Out</span>
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                </li>
                                <li><a href="#">Contact</a></li>
								<!-- <form method="get"><li class="icon_search"><a href="/checkout"><i class="mdi mdi-cart"></i></a></li>
								
				
				<button class="w3view-cart" type="submit" name="submit" value=""><i  ></i></button>
			</form>  -->
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </header>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!DOCTYPE html>
<html>
<head>
<title>  | Home</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link href="../../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../../../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="../../../css/font-awesome.css" rel="stylesheet"> 
<link href="../../../css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //for bootstrap working -->

<!-- Adding oh-autoVal css style -->

<!-- Adding jQuery script. It must be before other script files -->

<!-- Adding oh-autoVal script file -->


	<link href="../../../custpay/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="../../../custpay/css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="../../../custpay/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	



<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- header -->

<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
		
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<!-- <h1><a href="/"><span> </span> <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1> -->
			</div>
        <!-- header-bot -->
		<div class="col-md-4 agileits-social top_content">
						<!-- <ul class="social-nav model-3d-0 footer-social w3_agile_social">
																						
																							 
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul> -->



		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			
		</div>
		<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
			
  
						</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->
<!-- Modal1 -->
		
<!-- //Modal1 -->
<!-- Modal2 -->
		
<!-- //Modal2 -->
<!--/single_page-->
       <!-- /banner_bottom_agile_info -->


  <!-- banner-bootom-w3-agileits -->
 

<?php

	
	//  $st=DB::select("select * from tbl_cart,tbl_product where tbl_cart.p_id=tbl_product.p_id and tbl_cart.contractor_id and tbl_cart.status=1 " ); 
//	$st=DB::select("select * from tbl_cart,tbl_product where tbl_cart.p_id=tbl_product.p_id and tbl_cart.contractor_id and tbl_cart.status=1 " ); 
 $count = 1;
?>
<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>MY</span>Cart
            </h3>
            <br>
            <br>
			<!-- //tittle heading -->
			<div class="checkout-right">
				
				</h4>
				<div class="table-responsive">
				<form action="/confirmorder" method="post">@csrf
					<table class="timetable_sub" border="1">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>contractor Name</th>
								<th>Product Name</th>
								<th>Product Image</th>
								<th>Quantity</th>
							

								<th>Price</th>
								<th>Action</th>
								
							</tr>
												</thead>
												
												<?php $total = 0; ?>

@foreach($st as $row)
				<?php $total += $row->totalprice; ?>



						<tbody>
							<tr class="rem1">
								<td class="invert">{{$count++}}</td>
								
								<td class="invert">{{$row->contractor_id}}</td>
								<td class="invert-image">
								
									{{$row->pname}}
								
								</td>
								<td class="invert-image">
								
                                <img src="images/{{$row->image}}" id="profile-img-tag2" style="width:250px; height:200px;"/>
								
								</td>
								
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select" onChange="copy2()" id="quan">
											
											<div class="entry value">
												<span>{{$row->qty}}</span>
											</div>
										
										</div>
									</div>
								</td>
								
								<td class="invert" id="tot" onChange="copy2()" >Rs.{{$row->totalprice}}</td>
								
								<td class="invert">
									<div class="rem">
									<a href="{{url('/delete-product/'.$row->p_id)}}" class="submit">Remove</a> </div>
									</div>
								</td>
						
							</tr>
						</tbody>
				
						@endforeach
						<tfoot>
    <tr>
      <td id="total" colspan="5">Total Price</td>
			<td>Rs.{{ $total }}</td>
			<td  >	<button class="submit check_out btn">Place Order</button></td>
		
                  
    </tr>
  </tfoot>
										</table>
									
                   
		</form>
		<br>
		<br>
		<form action="/cproduct">@csrf
										
										<button id="close" class="submit check_out btn">Continuing Shopping</button>
										</form>         
				</div>
            </div>
            <br>
            <br>
            <br>
			






     
					
	<!-- //new_arrivals --> 
	  	<!--/slider_owl-->
	
			
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script type="text/javascript" src="../../../js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="../../../js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="../../../js/minicart.min.js"></script>


	<script>
function copy()
{
	var qua=document.getElementById("quan").value;
	var pr=document.getElementById("pr").value;
	var c=pr * qua;
	//alert(c);
	tot.value=c;
	//document.setElementById("tot").value=c;
	return c;
}
</script>

<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js --> 
	<!-- single -->
<script src="../../../js/imagezoom.js"></script>
<!-- single -->
<!-- script for responsive tabs -->						
<script src="../../../js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- FlexSlider -->
<script src="../../../js/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
					<!-- //FlexSlider-->
<!-- //script for responsive tabs -->		
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../../../js/move-top.js"></script>
<script type="text/javascript" src="../../../js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

<!-- for bootstrap working -->
<script type="text/javascript" src="../../../js/bootstrap.js"></script>



<script src="../../../custpay/js/minicart.js"></script>
	<script>
		paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
    </script>
    <script>
		$('.value-plus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
		});
	</script>




</body>
</html>
