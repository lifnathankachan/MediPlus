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

<!-- 
<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form> -->
<!-- <div class="col-lg-5 col-md-6 search-right">
                  <form class="form-inline my-lg-0">
                     <input id="myInput" class="form-control mr-sm-2" type="search" placeholder="Search">
                     <button class="btn" id="myDIV" type="submit">Search</button>
                  </form>
               </div> -->
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
<br>

<table border=1 id="myDIV">
<tr>


<th>contractor name</th>

<th>Image</th>

<th>contractor landmark</th>


<th>category</th>




<th>Licence number</th>


<th>Expiration date</th>
<th>Action</th>




</tr>
@foreach($demo as $value)
<tr>

<td>{{$value->contractor_name}}</td>
<!-- <td>img src="" URL::asset(images/{{$value->contractor_image}}""</td> -->

<td><img src="images/{{$value->contractor_image}}" width="150px" height="100px"> </td>
<!-- <td>{{$value->contractor_image}}</td> -->
<td>{{$value->contractor_landmark}}</td>
<!-- <td>{{$value->category}}</td> -->

@foreach($a as $d)
@if($value->category==$d->category_id)
<td>{{$d->category_name}}</td>
@endif
@endforeach

<td>{{$value->contractor_licenceno}}</td>
<td>{{$value->Expiration_date}}</td>

<form method="post" action="/selectdatee">
@csrf
<input hidden name="cid" value="{{$value->id}}">
    <td><button>Request</button><td></form>

</tr>

<!-- <td><a href="{{url('viewcontactorlabour/'.$value->id)}}"> Request</a></td> -->
<!-- <td><a href="/viewcontactorlabour?=id{{$value->id}}"></a></td> -->


</tr>
@endforeach

<!-- <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myDIV ").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> -->
      
</table>

</html>
