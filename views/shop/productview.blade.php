     
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="seller/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="seller/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="seller/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="seller/css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="seller/js/jquery-1.10.2.min.js"></script>
<script src="seller/js/amcharts.js"></script>	
<script src="seller/js/serial.js"></script>	
<script src="seller/js/light.js"></script>	
<script src="seller/js/radar.js"></script>	
<link href="seller/css/barChart.css" rel='stylesheet' type='text/css' />
<link href="seller/css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="seller/js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="seller/js/skycons.js"></script>

<script src="seller/js/jquery.easydropdown.js"></script>
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
<!--//skycons-icons-->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
						        <div class="main-search">
											<form>@csrf
											   <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
												<input type="submit" value="">
											</form>
									<div class="close"><img src="images/cross.png" /></div>
								</div>
									<div class="srch"><button></button></div>
									<script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
							<!--/profile_details-->
								<div class="profile_details_left">
									<ul class="nofitications-dropdown">
											<li class="dropdown note dra-down">
													   
																		<script type="text/javascript">
			
																	function DropDown(el) {
																		this.dd = el;
																		this.placeholder = this.dd.children('span');
																		this.opts = this.dd.find('ul.dropdown > li');
																		this.val = '';
																		this.index = -1;
																		this.initEvents();
																	}
																	DropDown.prototype = {
																		initEvents : function() {
																			var obj = this;

																			obj.dd.on('click', function(event){
																				$(this).toggleClass('active');
																				return false;
																			});

																			obj.opts.on('click',function(){
																				var opt = $(this);
																				obj.val = opt.text();
																				obj.index = opt.index();
																				obj.placeholder.text(obj.val);
																			});
																		},
																		getValue : function() {
																			return this.val;
																		},
																		getIndex : function() {
																			return this.index;
																		}
																	}

																	$(function() {

																		var dd = new DropDown( $('#dd') );

																		$(document).click(function() {
																			// all dropdowns
																			$('.wrapper-dropdown-3').removeClass('active');
																		});

																	});

																</script>
										    </li>
									       <li class="dropdown note">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope-o"></i> <span class="badge">3</span></a>

												
													<ul class="dropdown-menu two first">
														<li>
															<div class="notification_header">
																<h3>You have 3 new messages  </h3> 
															</div>
														</li>
														<li><a href="#">
														   <div class="user_img"><img src="seller/images/1.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet</p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>	
														 </a></li>
														 <li class="odd"><a href="#">
															<div class="user_img"><img src="seller/images/in.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet </p>
															<p><span>1 hour ago</span></p>
															</div>
														  <div class="clearfix"></div>	
														 </a></li>
														<li><a href="#">
														   <div class="user_img"><img src="seller/images/in1.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet </p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>	
														</a></li>
														<li>
															<div class="notification_bottom">
																<a href="#">See all messages</a>
															</div> 
														</li>
													</ul>
										</li>
										
							<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i> <span class="badge">5</span></a>

									<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 5 new notification</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="seller/images/in.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet</p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>	
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="seller/images/in5.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="seller/images/in8.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div> 
										</li>
									</ul>
							</li>	
												   		
							<div class="clearfix"></div>	
								</ul>
							</div>
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->
						<div class="outter-wp">
								<!--custom-widgets-->
												
												<!--//custom-widgets-->
												<!--/candile-->
													<div class="candile"> 
                                                    <div class="tab1">
                                                    <h3 class="inner-tittle two">Product Details</h3>
													<div class="graph">
														<div class="tables">
																<table class="table table-bordered">
                                                                 <thead> <tr> <th>Image</th>
                                                                  <th>Name</th>
                                                                   <th>Quantity</th>
                                                                    <th>Actual_Price</th>
																	<th>Manuf_date</th>
																	<th>Expiry_date</th>
                                                                    <th>stock</th>
												    				<th>status</th>
																	<th>Action</th>
                                                                    
                                                                    </tr>
                                                                     </thead> 
                                                                    <tbody> 
                                                                    @isset($items)
                                                                    @foreach($items as $row)
                                                                    <tr> 
                                                                    <th scope="row">
                                                                    <img src="images/{{$row->image}}" id="profile-img-tag2" style="width:50px;height:50px;"/>
                                                                     </th>
                                                                     <td>{{$row->pname}}</td>
                                                                      <td>{{$row->quantity}}</td>
                                                                       <td>{{$row->price}}</td>
                                                                     
                                                                       <td>{{$row->manufacture_date}}</td>
                                                                       <td>{{$row->expiration_date}}</td>
                                                                       <td>{{$row->stock}}</td>										
																																	
														      	 @if($row->status == '1')        
                                                                     <td>Active</td>         
                                                                   @else
                                                                     <td>Disable</td>        
                                                                   @endif
                                                                   <td><a href="{{url('Product/'.$row->p_id)}}">Change Status</a></td>                                          
                          </td>
                                                                      
                                                                       </tr> 
                                                                        
                                                                         </tbody>
                                                                              @endforeach
                        @endisset
                                                                               </table>
															</div>
												
													</div>
							
															</div>
														</div>
																				
															</div>
															
														</div>
													<!--/candile-->
													
												<!--/charts-->
																						
												<!--/float-charts-->
												
																				
												<!--//charts-->
												
										<!--/bottom-grids-->		 
									<div class="bottom-grids">
										<div class="dev-table">    
											<div class="col-md-4 dev-col">                                    

                                           
                                        </div>
                                        
                                        </div>
                                        

                                        </div>
										<div class="clearfix"></div>		
										
										</div>
										</div>
									<!--//bottom-grids-->
									
									</div>
									<!--/charts-inner-->
									</div>
										<!--//outer-wp-->
									</div>
									 <!--footer section start-->
										<footer>
										   <p> All Rights Reserved Lifna</a></p>
										</footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="/sellerindex"> <span id="logo"> <h1>Shop</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
	
									  <a href="index.html"><span class=" name-caret">{{Session::get('email')}}</span></a>
									
									<ul>
									<?php
                                        // use App\login;
                                        // $sess=session()->get('email');
                                        // $a=login::where('email',$sess)->get();
                                        // foreach($a as $object)
                                        // {
                                        //     $id=$object->id;
                                        //     $reg_id=$object->r_id;
                                        // }
                                        // $user = DB::table('tbl_regs')->where('r_id', $reg_id)->first();
                                       
                                         
                                    ?>
                                    

																	
									
										<li><a class="tooltips" href="/logout"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										<li><a class="tooltips" href="/changepass"><span>ResetPass</span><i class="lnr lnr-cog"></i></a></li>
									
										</ul>
									</div>
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
										<!-- <li><a href="/sellerindex"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
										<li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Staff  Management</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="/addstaff">Add Transporter</a></li>
											<li id="menu-academico-avaliacoes" ><a href="/viewstaff">View Transporter</a></li>
											<li id="menu-academico-boletim" ><a href="#">View Account Details</a></li>
											<li id="menu-academico-avaliacoes" ><a href="#">Payment</a></li>
											
										  </ul>
										 
										 </li>
										 <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Mail Box</span><span class="fa fa-angle-right" style="float: right"></span></a>
									   <ul>
										<li><a href="#"><i class="fa fa-inbox"></i> Inbox</a></li>
										<li><a href="/compose"><i class="fa fa-pencil-square-o"></i> Compose Mail</a></li>
									
									
									  </ul>
									</li> -->
										 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Product Management</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="/addproduct">Add Product</a></li>
											<li id="menu-academico-boletim" ><a href="/productview">View Product</a></li>
											<li id="menu-academico-boletim" ><a href="/inactive">Inactive Product</a></li>
											<li id="menu-academico-boletim" ><a href="/stockupdate">Stock Updation</a></li>
											<li id="menu-academico-avaliacoes" ><a href="/viewstock">Stock details</a></li>
											
										  </ul>
										</li>
										 <!-- <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i> <span>Ui Elements</span> <span class="fa fa-angle-right" style="float: right"></span></a>
											 <ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="#">Forms</a></li>
												<li id="menu-academico-boletim" ><a href="#">Validation Forms</a></li>
												<li id="menu-academico-boletim" ><a href="#">Tables</a></li>
												<li id="menu-academico-boletim" ><a href="#">Buttons</a></li>
											  </ul>
										 </li>
									<li><a href="#"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>
									<li id="menu-academico" ><a href="#"><i class="lnr lnr-book"></i> <span>Pages</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										  <ul id="menu-academico-sub" >
										    <li id="menu-academico-avaliacoes" ><a href="#">Login</a></li>
										    <li id="menu-academico-boletim" ><a href="#">Register</a></li>
											<li id="menu-academico-boletim" ><a href="#">404</a></li>
											<li id="menu-academico-boletim" ><a href="#">Sign up</a></li>
											<li id="menu-academico-boletim" ><a href="#">Profile</a></li>
										  </ul>
									 </li> -->
									 
							        <!-- <li id="menu-academico" ><a href="#"><i class="lnr lnr-layers"></i> <span>Components</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										 <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="#">Grids</a></li>
											<li id="menu-academico-boletim" ><a href="#">Media Objects</a></li>

										  </ul>
									 </li> -->
									<!-- <li><a href="#"><i class="lnr lnr-chart-bars"></i> <span>Charts</span> <span class="fa fa-angle-right" style="float: right"></span></a>
									  <ul>
										<li><a href="#"><i class="lnr lnr-map"></i> Maps</a></li>
										<li><a href="#"><i class="lnr lnr-apartment"></i> Graph Visualization</a></li>
									</ul>
									</li> -->
									
									  </ul>
									</li>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<link rel="stylesheet" href="seller/css/vroom.css">
<script type="text/javascript" src="seller/js/vroom.js"></script>
<script type="text/javascript" src="seller/js/TweenLite.min.js"></script>
<script type="text/javascript" src="seller/js/CSSPlugin.min.js"></script>
<script src="seller/js/jquery.nicescroll.js"></script>
<script src="seller/js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="seller/js/bootstrap.min.js"></script>
</body>
</html>