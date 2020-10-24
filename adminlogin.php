<?php
$con = mysqli_connect("mysql.hostinger.in","u644468346_saanv","7799037833","u644468346_bot");
session_start();
$username= $_SESSION['myValue1'];
$password= $_SESSION['myValue2'];
$id=$_SESSION['myValue7'];
$get=mysqli_query($con,"SELECT * FROM Admin WHERE id='$id'  ");
 if(mysqli_fetch_assoc($get)){
header("Location:admin.php");}
else{
$con = mysqli_connect("mysql.hostinger.in","u644468346_saanv","7799037833","u644468346_bot");
$button=isset($_POST['button']);
if($button)
 {                 
 $username=$_POST['username'];
 $password=$_POST['password'];
  $get=mysqli_query($con,"SELECT * FROM Admin WHERE username='$username' AND password='$password'");
 $get2= mysqli_fetch_assoc($get);
 $num=mysqli_num_rows($get);
      if($num)
     {
   echo "<script type='text/javascript'>alert('valid')</script> ";
      $id=$get2['id'];
    $email=$get2['email'];
      	  session_start();
    $_SESSION['myValue1']=$username;
     $_SESSION['myValue2']=$password;
     $_SESSION['myValue7']=$id;
      header("Location:admin.php"); 
       }
       else{ 
          echo "<script type='text/javascript'>alert('invalid credentials')</script>";}
 }}
?><html>
<head><meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
	<style>
	body{
		margin:0;
	}
	.jumbotron{
		min-height:300px;
		min-width:250px;
                margin-top:-40px;
                
	}
        img{
         margin-left:-40px;
}
        @media (min-width: 768px) {
         margin-left:-100px;}
        @media (min-width: 992px) {
         margin-left:-100px;}
	</style>
<title>SaanviVarna-Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
	<script type="text/javascript">var currLang = '';</script>		
	</head>
	<body>
	<div class="row">
	<div class="col-xs-7 col-xs-offset-4">
	<img src="saanvivarna.png" class="img-responsive" width="500px" height="300px" style="  padding:0;"/>
	</div>
	<div class="col-xs-4 col-xs-offset-4">
	<div class="jumbotron">
	<div class="container">
        
	<form action="http://mrinalini.esy.es/adminlogin.php" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="username" class="form-control" id="email" placeholder="Enter email">
    </div><br>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div><br><br>
    <button type="submit" name="button" class="col-xs-4 col-xs-offset-4 btn btn-default" >Login</button>
  </form>
  </div>
  </div></div></div>
	</body>
	</html>