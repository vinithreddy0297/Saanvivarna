<?php
$con = mysqli_connect("mysql.hostinger.in","u644468346_saanv","7799037833","u644468346_bot");
session_start();
$imgsrc=$_GET[''];
/*if (isset($_SESSION["loginname"])){header("Location:index.php"); 
  }
$button=isset($_POST['button']);
if($button)
 {   $name=$_POST['name'];
$cell=$_POST['cell']; 
$ccode=$_POST['ccode'];             
     $username=$_POST['email'];
     $password=$_POST['password'];
   $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
$input = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $password, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );


$sql="INSERT INTO userver (username, password,name,country,mobile) VALUES ( '$username', '$input', '$name','$ccode', '$cell')";
$keerthi=mysqli_query($con,$sql);
$_SESSION['loginname']=$username;
    $_SESSION['name']=$name;header("Location:index.php");
     
      }*/

?><html>
<head><meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
	<style>
	html{
		overflow-y:hidden;
	}
	.orderimg{
	width:300px;
	height:310px;
	float:left;
	margin-top:100px;
	margin-left:60px;
	position:relative;
	padding:0;
	}
	
  .img2{
	  
  }
	body{
		margin:0;
		padding:0;
	}
	.jumbotron{
		min-height:300px;
		min-width:600px;
        margin-top:-300px;
		padding:0;
		margin-left:140px;
                
	}
    <!--    img{
             margin-left: -26px;
    margin-top: -80px;
}-->
@media only screen 
  and (min-device-width: 768px) 
  and (max-device-width: 1024px)  
  and (-webkit-min-device-pixel-ratio: 1) {
	  .jumbotron{
		  min-width:500px;
		  margin-left:-100px;
		  min-height:300px;
	  }
	<!--  img{
		  margin-left:-70px;
		  }-->

}
.navdiv{
	background-color:#77d3c4;
	width:100%;
	height:40px;
}
@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 480px)
  and (-webkit-min-device-pixel-ratio: 2)
  and (orientation: portrait) {
	  
	  .jumbotron{
		  margin-left:-75px;
		  
	  }
	  <!--img{
		  min-width:300px;
		  margin-left:-100px;
		  paading:0;
	  }-->
}

	</style>
<title>SaanviVarna-Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
	<script type="text/javascript">var currLang = '';</script>		
	</head>
	<body>
	<div class="navdiv" style="position:relative;" >
	<p style="min-height:24px; position:absolute; margin-top:10px; color:#ffffff; font-size:15px; margin-left:245px;">Saanvi Varna</p>
	<img src="gallery_gen/shopping-cart.png" class="img2" />
	</div>
	<img class="orderimg" src="gallery/casual-clothes-for-women-ts1460699276.jpg" width="200px" height="240px"  />
	
	
	<div class="col-xs-7 col-xs-offset-4">
	</div>    
	<div class="col-xs-4 col-xs-offset-4">
	<div class="jumbotron">
	<div class="container">
        
	<form action="usersignup.php" method="post">
  <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
    </div>
<div class="form-group">
      <label for="cell">Mobile number:</label>
        <input type="text" class="form-control" name="cell"  pattern="[7-9]{1}[0-9]{9}" required  placeholder="Mobile number"   onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div> 
   <div class="form-group">
      <label for="flat">Flat:</label>
      <input type="text" name="flat" class="form-control" id="flat" required>
    </div>
 <div class="form-group">
<label for="street">Street:</label>
      <input type="text" name="street" class="form-control" id="street" >
    </div>

 <div class="form-group">
          <label for="city">City:</label>
      <input type="text" name="city" class="form-control" id="city" >
    </div>
 <div class="form-group">
<label for="State">State:</label>
      <input type="text" name="state" class="form-control" id="state" >
    </div>
 <div class="form-group">
<label for="pin">Pincode:</label>
      <input type="text" name="pincode" class="form-control" id="pincode" >
    </div>

    <button type="submit" name="button" class="col-xs-4 col-xs-offset-4 btn btn-default" >ORDER</button>
  </form></div>
  </div></div>
	</body>
	</html>