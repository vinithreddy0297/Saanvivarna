<?php
$con = mysqli_connect("mysql.hostinger.in","u644468346_saanv","7799037833","u644468346_bot");session_start();
//if (isset($_SESSION["loginname"])){
//	header("Location:index.php"); 
//}

//$button=isset($_POST['button']);
//if($button)
// {                 
     $username=$_SESSION['uname'];
     $password=$_SESSION['passwd'];
 $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
     $input=base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $password, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );

     $get=mysqli_query($con,"SELECT * FROM userver WHERE username='$username' AND password='$input'");
     $get2= mysqli_fetch_assoc($get);
    $num=mysqli_num_rows($get);
      if($num==1)
     {         
      $name=$get2['name'];	  
    $_SESSION['loginname']=$username;
    $_SESSION['name']=$name;
 $_SESSION['id']=$get2['id'];header("Location:index.php"); 
       }
       else{ 
          echo "<script type='text/javascript'>alert('invalid credentials')</script>";
}
//
//if (isset($_SESSION["loginname"])){
//	header("Location:index.php"); 
//	}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no ">
<title>SaanviVarna-Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
	<script type="text/javascript">var currLang = '';</script>
	<style>
	body{
		margin:0;
		overflow:none;
	}
	.jumbotron{
		min-height:300px;
		min-width:250px;
        margin-top:-40px;           
        max-height:360px;		
	}
	.imgdiv{
		
	}
	.img2{
		
		float:right;
		margin-right:20px;
		padding:5px;
		
	}
	
        .img1{
         margin-left:-40px;
}
.navdiv{
	background-color:#77d3c4;
	width:100%;
	height:40px;
}
p{
	min-height:24px; position:absolute; margin-top:10px; color:#ffffff; font-size:15px; margin-left:245px; 
}

#wb_element_instance2 { left: 70px; top: 10px; min-width: 200px; width: 200px; min-height: 24px; height: 24px; display: block; z-index: 463; }
@media only screen 
  and (min-device-width: 768px) 
  and (max-device-width: 1024px)  
  and (-webkit-min-device-pixel-ratio: 1) {
	  .jumbotron{
		  min-width:500px;
		  margin-left:-100px;
		  min-height:300px;
	  }
	  .img1{
		  margin-left:-70px;
	  }
	   .img2{
		  float:right;
		 margin-right:200px;
	  }

}
@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 480px)
  and (-webkit-min-device-pixel-ratio: 2)
  and (orientation: portrait) {
	  
	  .jumbotron{
		  margin-left:-75px;
		  
	  }
	  .img1{
		  min-width:300px;
		  margin-left:-100px;
		  margin-top:-20px;
		  paading:0;
	  }
	  p{
		  margin-left:10px;
	  }
}
	</style>
		
	</head>
	<body>
	<div class="navdiv" style="position:relative;">
	<a href="http://mrinalini.esy.es/"><p >Saanvi Varna</p></a>
	</div>
	
	
	<div class="imgdiv" height="100%" width="40%">
	
	</div>
	
	<div class="col-xs-7 col-xs-offset-4">
	<img src="saanvivarna.png" class="img-responsive img1" width="500px" height="300px" style="  padding:0;"/>
	</div>
	<div class="col-xs-4 col-xs-offset-4">
	<div class="jumbotron">
	<div class="container">
        
	<form action="userlogin.php" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div><br>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div><br><br>
    <button type="submit" name="button" class="col-xs-4 col-xs-offset-4 btn btn-default" >Login</button>
  </form><br>

  
  <h5 style="margin-top:20px; margin-left:20px; font-style: italic;  ">New User?<a href="http://mrinalini.esy.es/usersignup.php" style="color:#77d3c4">SignUpHere</a></h5>
  
  </div>
  </div></div>
	</body>
	</html>