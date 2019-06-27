
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
<br>

{{ Auth::user()->email }}


    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    
   
    <link rel="stylesheet" href="css1/style.css">
    <!-- <link rel="stylesheet" href="css/style1.css"> -->
 <link rel="stylesheet" href="assets/css1/Header-Blue.css">
    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/pr.css"> 
    <!--Multiple Images -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
    <div id="colorlib-page">
        <!-- <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
 -->        
 
    
<div id="colorlib-main">

            <!-- start banner Area -->
            
          

            <!-- start banner Area -->
            
            <section class="banner-area relative" id="home">    
                <div class="overlay overlay-bg"></div>
                <div class="container">             
                    <div class="row-lg-3 d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                        <!-- <!-- <h1 class="text-white">
                                About Us                
                            </h1>    -->
                            <br>
                            <br>
                            <p class="text-white link-nav"><a href="#">Upload Your Works </a>  </p>
                            <div class="container">
      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

        @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
        @endif

        <form method="post" action="/addgallery" enctype="multipart/form-data">
  {{csrf_field()}}


  <div class="form-group">
 
                                        <div class="panel-body">
                                        <form class="form-horizontal form-bordered" action="#">
       
                                       
                                            <div class="form-group">
                                            
                                                <label class="col-md-3 control-label">Select Catogory</label>
                                                <div class="col-md-6">
                                               
        <?php                                            
                                                    
 use App\categoryprofile;
$systems= DB::table('tbl_category')->select('category_id','category_name')->get();
?>
                                        <select id="category" name="category" class="form-control " required="">
                            <option value="" name="" id="">--Choose Any Option--</option>
                            <?php
                                foreach($systems as $object)
                                {
                                    $category_id=$object->category_id;
                                    $category_name=$object->category_name;

                                    echo"<option value='$category_id'>$category_name</option>";
                                }
                                    
                            ?>
                                  
                         </select>
                                                    </div>
                                                   
                                           
                                          <br>   <br>
                                          <label class="col-md-3 control-label">Describe Here</label>
                                          <div class="col-md-6">
        <input type="text" name="desc" id="desc" class="form-control" id="inputDefault">
</div><br><br>
                                             <label class="col-md-3 control-label">Upload Image</label>
                                          <div class="col-md-6">
                                                <div class="input-group control-group increment" >
                                                    <input type="file" name="filename[]" class="form-control">
                    
                                                 <div class="input-group-btn" > 
                                                     <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                                 </div>
                                         </div>
        <div class="clone hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="file" name="filename[]" class="form-control">
                <div class="input-group-btn"> 
                     <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                </div>
          </div>
        </div><br>
       
        <br>
        
            <button type="submit" class="btn btn-primary" style="width:100px">Save</button>
        </div>
        </div>
        
       
                 

    
  </form>        
  </div>
  </div>
  </div>
                                            </div>
                        

                        </div>  
                        
                    </div>
                    </div>  
                        
                    
                </div>
            </section>
            <!-- End banner Area -->    

            
          
</div>
</div>  



                                    
                
            <!-- start footer Area -->      
            

            


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
    <script type="text/javascript">


$(document).ready(function() {

    $(".btn-success").click(function(){ 
            var html = $(".clone").html();
            $(".increment").after(html);
    });

    $("body").on("click",".btn-danger",function(){ 
            $(this).parents(".control-group").remove();
    });

});

</script>

    </body>
</html>