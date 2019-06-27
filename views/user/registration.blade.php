
@extends('layout.user')

@section('content')


<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<link rel="stylesheet" type="text/css" href="css/oh-autoval-style.css">
<!-- Adding jQuery script. It must be before other script files validation -->
<script src="js/jquery.min.js"> </script>
<!-- Adding oh-autoVal script file validation -->
<script src="js/oh-autoval-script.js"></script>
	
     <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- Custom Theme files -->
	<link href="css/stylea.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->

	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<!-- //web font -->

</head>
<body>

<script>
        function user(){
          var x = document.getElementById("contractor");
          x.style.display = "none";
          var y= document.getElementById("labour");
          y.style.display = "none";
          var z= document.getElementById("shop");
	        z.style.display = "none";
            var a=document.getElementById('type').value;
            if(a==2)
            {
              var x = document.getElementById("contractor");
		          x.style.display = "block";
            }
            if(a==3)
            {
              var y = document.getElementById("labour");
		          y.style.display = "block";
            }
            if(a==4)
            {
              var z = document.getElementById("shop");
		          z.style.display = "block";
            }
        }
        </script>


<!-- main -->
<div class="w3layouts-main" > 
	<div class="bg-layer" >
	<center>	<h1>Register </h1>
		<div class="header-main" style="width:450px;"> 
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom"  style="width:100%;"><br><br><br><br><br><br><br><br>
			<form action="/register" method="post" name="employee_register" enctype="multipart/form-data" onsubmit="return" class="oh-autoval-form">
           
            @csrf

    
        <input type="text"  class="form-control av-name" name="name" placeholder=" Name" av-message="For name validation (space and . is allowed)" 
title="Name should only contain letters." >
 



<label><font color="#0E9408">Upload your Photo</font></label>
<input  name="image" class="form-control av-image"   av-message="image validation" type="file" placeholder="Photo">

<input type="email" class="form-control av-email " placeholder="Enter Email" name="email"  av-message="Invalid email address"
pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required="" >
@if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

<input type="text" class="form-control av-name"   av-message="For name validation (space and . is allowed)" placeholder="Landmark" name="landmark"  required="" >

<!-- <input type="text" class="form-control av-phone"   av-message="Phone number 7-13 digits long" placeholder="Mobile Number" name="mobile"
 required=""> -->
  <select  class="form-control " name="type" id="type" onchange="return user()" required="">
                    <option value="0">User Type</option>
                    <option value="1" >user</option>
                    <option value="2" >Contractor</option>
                    <option value="3" >Labour</option>
                    <option value="4" >Shop</option>

                    </select>

                    <select id="country" name="country"   class="form-control "required="">
                    <option value="0">Select Country</option>
                  @foreach($countries as $key => $country)
                  <option value="{{$key}}"> {{$country}}</option>
                  @endforeach
                  </select>
                  <select name="state" id="state"  class="form-control">
                                                                        <option value='0'>Select State</option>
                                                                        </select>


                     <select name="district" id="district" class="form-control " required="">
                <option value="0" >Select district</option>
                </select>

                <select name="panchayath"  class="form-control "  required="">
                                            <option disabled="disabled" selected="selected">panchayath</option>
                                            <option value="1" >Koodaranji</option>
                                            <option value="2" >Thiruvambadi</option>
                                            <option value="3" >Omassery</option>
                                            <option value="4" >Thamarasery</option>
                                        </select>


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

                         <!-- <input type="text" class="form-control av-name" placeholder="username" name="username" required=""> -->
                         <input type="password"  placeholder="password" name="password"class="form-control av-password"   av-message="Password must contain uppercase,lowercase,special chars,digits and minimum 6 chars.">
                        
                         <div class="form-control" id="contractor" name="contractor" style="display:none">
										<label>Upload Gov.verified certificate copy</label>
										<p id="vfile" style="color:red;"></P>
										<input id="cpic" accept=".png, .jpg, .jpeg,.JPG" name="cpic"  type="file" style="font-size: 10">





                                        <input type="date"  name="date">

                                    <input type="text"  placeholder="licencenumber" name="licenceno"><br>

                                    </div><br>

 <div class="form-control "  id="labour"   name="labour" style="display:none">
                    Phone number<input type="text" name="phone">
                    
                  </div>


                  <div class="form-control" id="shop" name="shop" style="display:none">
                   Licence Number <input type="text" name="licence_no">
                   
                  </div>
<br>

<input type="submit" class="btn btn-success" name="submit"></button>
                <!-- <input type="submit" value="Register"><br><br> -->
            
        </div>




				
				</form></center>

	
	
        <script type="text/javascript">
    $('#country').change(function(){
    var countryID = $(this).val();    
    if(countryID){
        $.ajax({
           type:"GET",
           url:"{{url('get-state-list')}}?country_id="+countryID,
           success:function(res){               
            if(res){
                $("#state").empty();
                $("#state").append('<option>Select</option>');
                $.each(res,function(key,value){
                    $("#state").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#state").empty();
            }
           }
        });
    }else{
        $("#state").empty();
        $("#city").empty();
    }      
   });
    $('#state').on('change',function(){
    var stateID = $(this).val();    
    if(stateID){
        $.ajax({
           type:"GET",
           url:"{{url('get-city-list')}}?state_id="+stateID,
           success:function(res){               
            if(res){
                $("#district").empty();
                $.each(res,function(key,value){
                    $("#district").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#district").empty();
            }
           }
        });
    }else{
        $("#district").empty();
    }
        
   });
</script>

				
			</div>
		
		</div>
		<br>
		<br>
		<br>
		<br>
		
	</div>
</div>	
<!-- //main -->

</body>



</html>




















	

        @endsection

	
 
 