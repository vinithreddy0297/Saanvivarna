<?php
$con = mysqli_connect("mysql.hostinger.in","u644468346_saanv","7799037833","u644468346_bot");session_start();

if (isset($_SESSION["loginname"])){
$name=$_SESSION["name"];
$name="Hi!!"."$name";
$display="block";
$dest="userprofile.php";
$datatarget="";
$datatoggle="";
$href="userprofile.php";
}else
{$name="Hello."."login";
$display="none";
$datatarget="#myModal";
$datatoggle="modal";
$dest="userlogin.php";
}

$button=isset($_POST['button']);
if($button)
 {
     $username=$_POST['username'];
     $password=$_POST['password'];
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
 }else if(isset($_POST['button1']))
 {   $name=$_POST['name1'];
$cell=$_POST['cell']; 
$ccode=$_POST['ccode'];             
     $username=$_POST['email'];
     $password=$_POST['password1'];
   $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
$input = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $password, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );


$sql="INSERT INTO userver (username, password,name,country,mobile) VALUES ( '$username', '$input', '$name','$ccode', '$cell')";
$keerthi=mysqli_query($con,$sql);
$_SESSION['loginname']=$username;
    $_SESSION['name']=$name;
	header("Location:index.php");
     
      }

 

 ?><!DOCTYPE html>
<html lang="en">
<head>
<style>

  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  h4{
	  font-size: 30px;
  }
  .modal-header{
	  height:90px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  .modal-body{
	  height:250px;
	  overflow-y:auto;
  }
  #mymodal1body.modal-body{
	  height:350px;
  }
  
  .modal-dialog {
        position: absolute;
        top: 80px;
        right: 100px;
        bottom: 0;
        left: 0;
        z-index: 10040;
        overflow: auto;
        overflow-y: auto;
}
@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 568px)
  and (-webkit-min-device-pixel-ratio: 2) {
	  .modal-dialog {
        position: absolute;
        top: 20px;
        right: 100px;
        bottom: 0;
        left: 0;
        z-index: 10040;
        overflow: auto;
        overflow-y: auto;
}
.modal-body{
	height:250px;
}
#mymodal1body.modal-body{
	  height:250px;
  }
}
  </style>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Saanvi Varna|Home</title>
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.1.39" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1481900769" rel="stylesheet" type="text/css" />
	<link href="css/1.css?ts=1481900769" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  #wb_element_instance5{
	  display:<?php echo $display; ?>;
  }
  .modal-title{
	  color:#77d3c4;
	  text-align:center;
	  background-color:#77d3c4;
  }
  </style>
  <script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover().css("display","block");   
});
</script>
 
</head>


<body><div class="root"><div class="vbox wb_container" id="wb_header">

<div id="wb_element_instance0" class="wb_element"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu"><li class="active"><a href="index.php" target="_self" title="Home">Home</a></li><li><a href="shop.php" target="_self" title="Shop">Shop</a></li><li><a href="About-us/" target="_self" title="About us">About us</a></li><li><a href="<?php echo $href; ?>" data-toggle="<?php echo $datatoggle; ?>" data-target="<?php echo $datatarget; ?>" target="_self"><?php echo $name; ?></a></li></ul><script type="text/javascript"> (function() { var isOpen = false, elem = $('#wb_element_instance0'), btn = elem.children('.btn-collapser').eq(0); btn.on('click', function() { if (elem.hasClass('collapse-expanded')) { isOpen = false; elem.removeClass('collapse-expanded'); } else { isOpen = true; elem.addClass('collapse-expanded'); } }); })(); </script></div>
<!--<div id="wb_element_instance1" class="wb_element"><img alt="clothes" src="gallery_gen/6de4f680a85f7e55c2d0b8e7291dfc12_50x50.png"></div>-->
<div id="wb_element_instance2" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal"><p><span style="color:white !important;">Saanvi Varna</span></p></div>
<div id="wb_element_instance4" class="wb_element"><a href="https://www.facebook.com/Saanvi-Varna-1453861758243423/"><img alt="social" src="gallery_gen/6f7ad8f3182f1dcce4867a8568960f14_32x32.png"></a></div>
<div id="wb_element_instance5" class="wb_element"  ><a href="userlogout.php"><img alt="social" src="gallery_gen/logout.png"></a></div>
</div>

<div class="vbox wb_container" id="wb_main">
<center>
<div ><img class="img-responsive" src="gallery/saanvivarna.png"/></div>
</center>
<div id="wb_element_instance7" class="wb_element"><a class="wb_button" href="shop.php"><span>Shop now</span></a></div>
<center>
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:5%;" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="gallery/imageslide1.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="gallery/imageslide3.jpg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="gallery/imageslide3.jpg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        <img src="gallery/imageslide4.jpg" alt="Flower" width="460" height="345" onclick="alert("hello");>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


</center>


	<div id="wb_element_instance10" class="wb_element"><a href="shopselect.php?dir=kids fashions"><img alt="legs-window-car-dirt-road-51397" src="gallery/WhatsApp Image 2016-12-19 at 9.07.23 PM.jpeg"></a></div><div id="wb_element_instance11" class="wb_element"><a href="shopselect.php?dir=dresses"><img alt="pexels-photo-61129" src="gallery/dress2.jpg"></a></div><div id="wb_element_instance12" class="wb_element"><a href="shopselect.php?dir=fabric"><img alt="casual-men-clothes-to-groom-your-personality-5" src="gallery/dress3.jpg"></a></div><div id="wb_element_instance15" class="wb_element" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><span style="color:#ffffff;">Shop now</span></h2></div><div id="wb_element_instance16" class="wb_element" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><span style="color:#ffffff;">Shop now</span></h2></div><div id="wb_element_instance17" class="wb_element" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><span style="color:#ffffff;">Shop now</span></h2></div><div id="wb_element_instance18" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;">We offer</h1></div><div id="wb_element_instance19" class="wb_element"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 2px solid #77d3c4;"></div></div><div id="wb_element_instance20" class="wb_element"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 2px solid #77d3c4;"></div></div><div id="wb_element_instance21" class="wb_element"><a href="shopselect.php?dir=lehengas"><img alt="Sarees-img" src="gallery/sareesmain.jpg"></a></div><div id="wb_element_instance22" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;">Sarees</p></div><div id="wb_element_instance23" class="wb_element"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 2px solid #77d3c4;"></div></div><div id="wb_element_instance24" class="wb_element"><a href="shopselect.php?dir=dresses"><img alt="2016-new-autumn-fashion-brand-font-b-men-b-font-font-b-clothes-b-font-slim" src="gallery/dresses.jpg"></a></div><div id="wb_element_instance25" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;">Dresses</p></div><div id="wb_element_instance26" class="wb_element"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 2px solid #77d3c4;"></div></div><div id="wb_element_instance27" class="wb_element"><a href="shopselect.php?dir=kids fashions"><img alt="kids Fashio" src="gallery/kids fashions main.jpg"></a></div><div id="wb_element_instance28" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;">Kids Fashions</p></div><div id="wb_element_instance29" class="wb_element"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 2px solid #77d3c4;"></div></div><div id="wb_element_instance30" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(1);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance30");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance30").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 124px;">
	
<div id="wb_element_instance31" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(60);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div>
			<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form action="index.php" method="post">
            <div class="form-group">
              <label for="usrname">Username</label>
              <input type="email" class="form-control" name="username" id="usrname" placeholder="Enter Email">
            </div>
            <div class="form-group " >
              <label for="psw"> Password</label>
              <input type="password" class="form-control" name="password" id="psw" placeholder="Enter password">
            </div>
              <button type="submit" class="btn btn-success btn-block" name="button"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn  btn-basic pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
		            <button type="submit" class="btn  btn-success pull-right" data-dismiss="modal" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-arrow-right"></span> sign Up</button>
          
        </div>
      </div>
	  
    </div>
  </div> 
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4> Sign Up</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px; " id="mymodal1body">
          <form action="index.php" method="post">
            <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="name1" class="form-control" id="name" placeholder="Enter name">
    </div>
<div class="form-group">
      <label for="cell">Mobile number:</label>
       <select id="ccode" name= "ccode" class="form-control">
	<option data-countryCode="IN" value="91" Selected>India (+91)</option>
	<option data-countryCode="US" value="1">USA (+1)</option>
	<option data-countryCode="GB" value="44" >UK (+44)</option>
	<optgroup label="Other countries">
		<option data-countryCode="DZ" value="213">Algeria (+213)</option>
		<option data-countryCode="AD" value="376">Andorra (+376)</option>
		<option data-countryCode="AO" value="244">Angola (+244)</option>
		<option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
		<option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
		<option data-countryCode="AR" value="54">Argentina (+54)</option>
		<option data-countryCode="AM" value="374">Armenia (+374)</option>
		<option data-countryCode="AW" value="297">Aruba (+297)</option>
		<option data-countryCode="AU" value="61">Australia (+61)</option>
		<option data-countryCode="AT" value="43">Austria (+43)</option>
		<option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
		<option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
		<option data-countryCode="BH" value="973">Bahrain (+973)</option>
		<option data-countryCode="BD" value="880">Bangladesh (+880)</option>
		<option data-countryCode="BB" value="1246">Barbados (+1246)</option>
		<option data-countryCode="BY" value="375">Belarus (+375)</option>
		<option data-countryCode="BE" value="32">Belgium (+32)</option>
		<option data-countryCode="BZ" value="501">Belize (+501)</option>
		<option data-countryCode="BJ" value="229">Benin (+229)</option>
		<option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
		<option data-countryCode="BT" value="975">Bhutan (+975)</option>
		<option data-countryCode="BO" value="591">Bolivia (+591)</option>
		<option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
		<option data-countryCode="BW" value="267">Botswana (+267)</option>
		<option data-countryCode="BR" value="55">Brazil (+55)</option>
		<option data-countryCode="BN" value="673">Brunei (+673)</option>
		<option data-countryCode="BG" value="359">Bulgaria (+359)</option>
		<option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
		<option data-countryCode="BI" value="257">Burundi (+257)</option>
		<option data-countryCode="KH" value="855">Cambodia (+855)</option>
		<option data-countryCode="CM" value="237">Cameroon (+237)</option>
		<option data-countryCode="CA" value="1">Canada (+1)</option>
		<option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
		<option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
		<option data-countryCode="CF" value="236">Central African Republic (+236)</option>
		<option data-countryCode="CL" value="56">Chile (+56)</option>
		<option data-countryCode="CN" value="86">China (+86)</option>
		<option data-countryCode="CO" value="57">Colombia (+57)</option>
		<option data-countryCode="KM" value="269">Comoros (+269)</option>
		<option data-countryCode="CG" value="242">Congo (+242)</option>
		<option data-countryCode="CK" value="682">Cook Islands (+682)</option>
		<option data-countryCode="CR" value="506">Costa Rica (+506)</option>
		<option data-countryCode="HR" value="385">Croatia (+385)</option>
		<option data-countryCode="CU" value="53">Cuba (+53)</option>
		<option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
		<option data-countryCode="CY" value="357">Cyprus South (+357)</option>
		<option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
		<option data-countryCode="DK" value="45">Denmark (+45)</option>
		<option data-countryCode="DJ" value="253">Djibouti (+253)</option>
		<option data-countryCode="DM" value="1809">Dominica (+1809)</option>
		<option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
		<option data-countryCode="EC" value="593">Ecuador (+593)</option>
		<option data-countryCode="EG" value="20">Egypt (+20)</option>
		<option data-countryCode="SV" value="503">El Salvador (+503)</option>
		<option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
		<option data-countryCode="ER" value="291">Eritrea (+291)</option>
		<option data-countryCode="EE" value="372">Estonia (+372)</option>
		<option data-countryCode="ET" value="251">Ethiopia (+251)</option>
		<option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
		<option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
		<option data-countryCode="FJ" value="679">Fiji (+679)</option>
		<option data-countryCode="FI" value="358">Finland (+358)</option>
		<option data-countryCode="FR" value="33">France (+33)</option>
		<option data-countryCode="GF" value="594">French Guiana (+594)</option>
		<option data-countryCode="PF" value="689">French Polynesia (+689)</option>
		<option data-countryCode="GA" value="241">Gabon (+241)</option>
		<option data-countryCode="GM" value="220">Gambia (+220)</option>
		<option data-countryCode="GE" value="7880">Georgia (+7880)</option>
		<option data-countryCode="DE" value="49">Germany (+49)</option>
		<option data-countryCode="GH" value="233">Ghana (+233)</option>
		<option data-countryCode="GI" value="350">Gibraltar (+350)</option>
		<option data-countryCode="GR" value="30">Greece (+30)</option>
		<option data-countryCode="GL" value="299">Greenland (+299)</option>
		<option data-countryCode="GD" value="1473">Grenada (+1473)</option>
		<option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
		<option data-countryCode="GU" value="671">Guam (+671)</option>
		<option data-countryCode="GT" value="502">Guatemala (+502)</option>
		<option data-countryCode="GN" value="224">Guinea (+224)</option>
		<option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
		<option data-countryCode="GY" value="592">Guyana (+592)</option>
		<option data-countryCode="HT" value="509">Haiti (+509)</option>
		<option data-countryCode="HN" value="504">Honduras (+504)</option>
		<option data-countryCode="HK" value="852">Hong Kong (+852)</option>
		<option data-countryCode="HU" value="36">Hungary (+36)</option>
		<option data-countryCode="IS" value="354">Iceland (+354)</option>
		<option data-countryCode="ID" value="62">Indonesia (+62)</option>
		<option data-countryCode="IR" value="98">Iran (+98)</option>
		<option data-countryCode="IQ" value="964">Iraq (+964)</option>
		<option data-countryCode="IE" value="353">Ireland (+353)</option>
		<option data-countryCode="IL" value="972">Israel (+972)</option>
		<option data-countryCode="IT" value="39">Italy (+39)</option>
		<option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
		<option data-countryCode="JP" value="81">Japan (+81)</option>
		<option data-countryCode="JO" value="962">Jordan (+962)</option>
		<option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
		<option data-countryCode="KE" value="254">Kenya (+254)</option>
		<option data-countryCode="KI" value="686">Kiribati (+686)</option>
		<option data-countryCode="KP" value="850">Korea North (+850)</option>
		<option data-countryCode="KR" value="82">Korea South (+82)</option>
		<option data-countryCode="KW" value="965">Kuwait (+965)</option>
		<option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
		<option data-countryCode="LA" value="856">Laos (+856)</option>
		<option data-countryCode="LV" value="371">Latvia (+371)</option>
		<option data-countryCode="LB" value="961">Lebanon (+961)</option>
		<option data-countryCode="LS" value="266">Lesotho (+266)</option>
		<option data-countryCode="LR" value="231">Liberia (+231)</option>
		<option data-countryCode="LY" value="218">Libya (+218)</option>
		<option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
		<option data-countryCode="LT" value="370">Lithuania (+370)</option>
		<option data-countryCode="LU" value="352">Luxembourg (+352)</option>
		<option data-countryCode="MO" value="853">Macao (+853)</option>
		<option data-countryCode="MK" value="389">Macedonia (+389)</option>
		<option data-countryCode="MG" value="261">Madagascar (+261)</option>
		<option data-countryCode="MW" value="265">Malawi (+265)</option>
		<option data-countryCode="MY" value="60">Malaysia (+60)</option>
		<option data-countryCode="MV" value="960">Maldives (+960)</option>
		<option data-countryCode="ML" value="223">Mali (+223)</option>
		<option data-countryCode="MT" value="356">Malta (+356)</option>
		<option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
		<option data-countryCode="MQ" value="596">Martinique (+596)</option>
		<option data-countryCode="MR" value="222">Mauritania (+222)</option>
		<option data-countryCode="YT" value="269">Mayotte (+269)</option>
		<option data-countryCode="MX" value="52">Mexico (+52)</option>
		<option data-countryCode="FM" value="691">Micronesia (+691)</option>
		<option data-countryCode="MD" value="373">Moldova (+373)</option>
		<option data-countryCode="MC" value="377">Monaco (+377)</option>
		<option data-countryCode="MN" value="976">Mongolia (+976)</option>
		<option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
		<option data-countryCode="MA" value="212">Morocco (+212)</option>
		<option data-countryCode="MZ" value="258">Mozambique (+258)</option>
		<option data-countryCode="MN" value="95">Myanmar (+95)</option>
		<option data-countryCode="NA" value="264">Namibia (+264)</option>
		<option data-countryCode="NR" value="674">Nauru (+674)</option>
		<option data-countryCode="NP" value="977">Nepal (+977)</option>
		<option data-countryCode="NL" value="31">Netherlands (+31)</option>
		<option data-countryCode="NC" value="687">New Caledonia (+687)</option>
		<option data-countryCode="NZ" value="64">New Zealand (+64)</option>
		<option data-countryCode="NI" value="505">Nicaragua (+505)</option>
		<option data-countryCode="NE" value="227">Niger (+227)</option>
		<option data-countryCode="NG" value="234">Nigeria (+234)</option>
		<option data-countryCode="NU" value="683">Niue (+683)</option>
		<option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
		<option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
		<option data-countryCode="NO" value="47">Norway (+47)</option>
		<option data-countryCode="OM" value="968">Oman (+968)</option>
		<option data-countryCode="PW" value="680">Palau (+680)</option>
		<option data-countryCode="PA" value="507">Panama (+507)</option>
		<option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
		<option data-countryCode="PY" value="595">Paraguay (+595)</option>
		<option data-countryCode="PE" value="51">Peru (+51)</option>
		<option data-countryCode="PH" value="63">Philippines (+63)</option>
		<option data-countryCode="PL" value="48">Poland (+48)</option>
		<option data-countryCode="PT" value="351">Portugal (+351)</option>
		<option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
		<option data-countryCode="QA" value="974">Qatar (+974)</option>
		<option data-countryCode="RE" value="262">Reunion (+262)</option>
		<option data-countryCode="RO" value="40">Romania (+40)</option>
		<option data-countryCode="RU" value="7">Russia (+7)</option>
		<option data-countryCode="RW" value="250">Rwanda (+250)</option>
		<option data-countryCode="SM" value="378">San Marino (+378)</option>
		<option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
		<option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
		<option data-countryCode="SN" value="221">Senegal (+221)</option>
		<option data-countryCode="CS" value="381">Serbia (+381)</option>
		<option data-countryCode="SC" value="248">Seychelles (+248)</option>
		<option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
		<option data-countryCode="SG" value="65">Singapore (+65)</option>
		<option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
		<option data-countryCode="SI" value="386">Slovenia (+386)</option>
		<option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
		<option data-countryCode="SO" value="252">Somalia (+252)</option>
		<option data-countryCode="ZA" value="27">South Africa (+27)</option>
		<option data-countryCode="ES" value="34">Spain (+34)</option>
		<option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
		<option data-countryCode="SH" value="290">St. Helena (+290)</option>
		<option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
		<option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
		<option data-countryCode="SD" value="249">Sudan (+249)</option>
		<option data-countryCode="SR" value="597">Suriname (+597)</option>
		<option data-countryCode="SZ" value="268">Swaziland (+268)</option>
		<option data-countryCode="SE" value="46">Sweden (+46)</option>
		<option data-countryCode="CH" value="41">Switzerland (+41)</option>
		<option data-countryCode="SI" value="963">Syria (+963)</option>
		<option data-countryCode="TW" value="886">Taiwan (+886)</option>
		<option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
		<option data-countryCode="TH" value="66">Thailand (+66)</option>
		<option data-countryCode="TG" value="228">Togo (+228)</option>
		<option data-countryCode="TO" value="676">Tonga (+676)</option>
		<option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
		<option data-countryCode="TN" value="216">Tunisia (+216)</option>
		<option data-countryCode="TR" value="90">Turkey (+90)</option>
		<option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
		<option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
		<option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
		<option data-countryCode="TV" value="688">Tuvalu (+688)</option>
		<option data-countryCode="UG" value="256">Uganda (+256)</option>
		<!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
		<option data-countryCode="UA" value="380">Ukraine (+380)</option>
		<option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
		<option data-countryCode="UY" value="598">Uruguay (+598)</option>
		<!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
		<option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
		<option data-countryCode="VU" value="678">Vanuatu (+678)</option>
		<option data-countryCode="VA" value="379">Vatican City (+379)</option>
		<option data-countryCode="VE" value="58">Venezuela (+58)</option>
		<option data-countryCode="VN" value="84">Vietnam (+84)</option>
		<option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
		<option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
		<option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
		<option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
		<option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
		<option data-countryCode="ZM" value="260">Zambia (+260)</option>
		<option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
	</optgroup>
</select>&nbsp <input type="text" class="form-control" name="cell"  pattern="[7-9]{1}[0-9]{9}" required  placeholder="Mobile number"   onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div><br>
    <div class="form-group" >
      <label for="pwd">Password:</label>
      <input type="password" name="password1" class="form-control" id="password" placeholder="must contain at least 6 characters ">
    </div><br>
	<div class="form-group" id="confpass">
      <label for="pwd"  >Confirm Password:</label>
      <input type="password" name="password2" class="form-control" id="password1" placeholder="must contain at least 6 characters " >
    </div><br>
	<script>
	$("#password1").blur(function(){
    if(!($("#password").val()==$("#password1").val())){
		$("#signupbtn").addClass("disabled");
	}
});
	</script>
              <button type="submit" class="btn btn-success btn-block" name="button1" id="signupbtn"><span class="glyphicon glyphicon-off"></span> Sign Up</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>
	  
    </div>
  </div> 
  
</body>
</html>
