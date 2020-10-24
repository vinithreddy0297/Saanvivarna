<!DOCTYPE html>
  <?php
session_start();
if (isset($_SESSION["loginname"])){
$akname=$_SESSION["name"];
$akname="Hi!!"."$akname";
$dest="userprofile.php";
}

else
{$akname="Hello.  "."login";
$dest="userlogin.php";}



	   $num=0;
	$con = mysqli_connect("mysql.hostinger.in","u644468346_saanv","7799037833","u644468346_bot");
	
	$button=isset($_POST['button']);
	
	if($button){
		$mkd=$_POST['slct3'];
 
		 $get=mysqli_query($con,"SELECT * FROM file WHERE dir='$mkd'   ");
         $num=mysqli_num_rows($get);
	
 
 while($row = mysqli_fetch_array($get)) {
    // Append to the array
    $fname[] = $row['filename'];  
	$src[]=$row['dest'];
	$delid[]=$row['id'];
	$name[]=$row['dname'];
	$cost[]=$row['cost'];
	//$keet[]=$row['dno'];
   // $bhanu[]=$row['qno']; 
   }
	
	}


?> 
<html lang="en">
<head>
	<script >
	function orderbtn( Id ){
	
   var iframe = document.createElement('iframe');
   iframe.src ='order.html?kid='+Id;
   document.body.appendChild(iframe);

}
	
	</script>
	<title>Products</title>
	
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.1.39" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1481900769" rel="stylesheet" type="text/css" />
	<link href="css/5.css?ts=1481900769" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>
<div class="root">
<div class="vbox wb_container" id="wb_header">

<div id="wb_element_instance69" class="wb_element"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu"><li><a href="index.php" target="_self" title="Home">Home</a></li><li class="active"><a href="shop.php" target="_self" title="Shop">Shop</a></li><li><a href="About-us/" target="_self" title="About us">About us</a></li><li><a href="<?php echo $dest; ?> " target="_self" t