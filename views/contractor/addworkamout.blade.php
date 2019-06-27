<html>
    <body>

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
                                <li><a href="addworkamout">Add work amout</a></li>
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


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
        <form action="/addworkamount" method="post" name="employee_register" enctype="multipart/form-data" onsubmit="return" class="oh-autoval-form">
           
           @csrf

   

<center>
                                       <?php 
use App\categoryprofile;
$num=Auth::id();

$a=DB::select("select * from tbl_contractor,tbl_category where tbl_category.category_id=tbl_contractor.category and tbl_contractor.id='$num'")
// $systems= DB::table('tbl_category')->select('category_id','category_name')->get();
?>
                                       <!-- <select id="category" name="category" class="form-control " required="">
                           <option value="" name="" id="">--Choose Any Option--</option> -->
                           <?php
                            //    foreach($systems as $object)
                            //    {
                            //        $category_id=$object->category_id;
                            //        $category_name=$object->category_name;

                            //        echo"<option value='$category_id'>$category_name</option>";
                            //    }
foreach($a as $b)
{
    $category_id=$b->category_id;
          $category_name=$b->category_name; 
}
                   
                           ?>
                                 
                        <!-- </select> -->
                        <br>
                        <input type="hidden" name="category" value="<?php echo $category_id ?>">             
  category <input type="text" name="category" value="<?php echo $category_name ?>">
                       Amount <input type="text"   name="amount" placeholder=" price" av-message="For name validation (space and . is allowed)" 
title="Name should only contain letters." >

<input type="submit" class="btn btn-success" name="submit"></button>
               <!-- <input type="submit" value="Register"><br><br> -->
               </center>    
       </div>




               
               </form>
                        



        </body>
        </html>