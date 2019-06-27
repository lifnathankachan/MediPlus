
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
                        <!-- <a href="#"><i class="fa fa-phone"></i>(</a>
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
                                <li><a href="addworkamout">Add work amout</a></li>
                                <li><a href="viewlabours">view Labours</a></li>
                                <li><a href="addgallery">Add Gallery</a></li>
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
                                <li class="icon_search"><a href="#"><i class="mdi mdi-cart"></i></a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </header>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
welcome{{ Auth::user()->email }}

<br>
<br><br><br>
<br>
<br><br><br>
<br>
<br><br><br>



@foreach($demo as $value)
<form action="/view" method="post">@csrf    
<div id="profile-img-tag2" style="width:300px; height:250px;">
<div>
@foreach($a as $d)
@if($value->contractor_id==$d->id)
        <b>contractor name :{{$d->contractor_name}} </b>
        <input type="hidden" name="contractor_name" value="{{$value->contractor_id}}">
@endif
@endforeach
</div>
<div>

@foreach($b as $c)
@if($value->customer_id==$c->id)
 <b>customer name: {{$c->name}}</b>
 <input type="hidden" name="customer_name" value= "{{$value->customer_id}}">
 <!-- return {{$value->customer_id}} -->
@endif
@endforeach
</div>

<div>
@foreach($b as $x)
@if($value->customer_id==$x->id)

 <img src="images/{{$x->image}}"id="profile-img-tag2" style="width:250px; height:150px;"/> 
 <input type="hidden" name="customer_image" value="{{$x->image}}">
@endif
@endforeach
</div>

<td>start date:{{$value->start_date}}</td><br>
<input type="hidden" name="start_date" value="{{$value->start_date}}">

<td>end date:{{$value->end_date}}</td>
<input type="hidden" name="end_date" value="{{$value->end_date}}">
<?php 
$start_date = strtotime($value->start_date); 
$end_date = strtotime($value->end_date); 

$days=($end_date - $start_date)/60/60/24; 
$a=Auth::id();

 $x=DB::select("select * from tbl_workamount where contractor_id='$a'");
foreach($x as $f)
{
    $amount=$f->amount;
}
$d=$amount*$days;


?>
<br>
<!-- <th><button>confirm</button></th>
<th><button>Declain</button></th> -->
<th> total amount:{{$d}}</th>
<input type="hidden" name="total_amount" value="{{$d}}">
<!-- <div><b>
date of booking:{{$value->start_date}}</b>
<input type="hidden" name="date" value="{{$value->date}}">
</div> -->

</div>
<!-- <th><button>confirm</button></th>
<th><button>Declain</button></th> -->

@endforeach 

<select id="labour_name" name="labour_name"    required="">
                    <option value="0">Select Labour</option>
                   
                    @foreach($v as $r)
                   
                    @foreach($t as $k)
                   
                    @if($r->labour_id==$k->labour_id)
                   
                    <option value="{{$k->labour_id}}">{{$k->labour_name}}</option>
                   
                    @endif
                    @endforeach
                    @endforeach
                    
                  
                  </select>
                  <br>
                  
																	
																	
																	
             <input type="submit" name="submit" value="Assign" class="button"> 
        </form>
				