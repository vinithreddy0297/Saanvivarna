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
	$mkdir12=$_SESSION["dir1"];
         unset($_SESSION["dir1"]);
	if($button||$mkdir12){
                $mkd=$_POST['slct3'];
                if($mkdir12)
                $mkd=$mkdir12;
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
	<title>Saanvi Varna|Shop</title>
	
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
	
<div id="wb_element_instance69" class="wb_element"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu"><li><a href="index.php" target="_self" title="Home">Home</a></li><li class="active"><a href="shop.php" target="_self" title="Shop">Shop</a></li><li><a href="About-us/" target="_self" title="About us">About us</a></li><li><a href="<?php echo $dest; ?>" target="_self" title="Profile"><?php echo $akname; ?></a></li></ul><script type="text/javascript"> (function() { var isOpen = false, elem = $('#wb_element_instance69'), btn = elem.children('.btn-collapser').eq(0); btn.on('click', function() { if (elem.hasClass('collapse-expanded')) { isOpen = false; elem.removeClass('collapse-expanded'); } else { isOpen = true; elem.addClass('collapse-expanded'); } }); })(); </script></div>
<div id="wb_element_instance71" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal"><span style="color:#ffffff;">Saanvi Varna</span></p></div>
<div id="wb_element_instance72" class="wb_element"><a href="Contacts/"><img alt="social" src="gallery_gen/6f7ad8f3182f1dcce4867a8568960f14_32x32.png"></a></div>
</div>


<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance76" class="wb_element">
 <script type="text/javascript" src="js/big.min.js"></script>
 <script type="text/javascript" src="js/StoreModule.js?v=2.0.5"></script>
 
    <div class="wb-store wb-mob-store">
	  <div class="wb-store-filters">

		<form id="viewerform" name="bottt" action="shop.php" method="POST">
Choose Model:
<select  class="wb-store-cat-select form-control" id="slct3" name="slct3"  >
  <option value=""></option>
  <option value="sarees">Sarees</option>
  <option value="dresses">Dresses</option>
  <option value="lehengas">Lehengas</option>
  <option value="kids_fashions">kids fashions</option>
  <option value="fabric">fabric</option>
</select><br>

<input type="submit" name="button" style="width:90px; padding:20px;" value="choose"><br>
</form>

</div>
	  <div class="wb-store-list">
	         <?php for($i=0;$i<$num;$i++) {?>
			 <div class="wb-store-item" data-iid="<?php echo $i;?>" data-cids="1,"><div class="wb-store-thumb"><img src="<?php echo($src[$i]);?>" alt="<?php echo($name[$i]);?>"></div><div class="wb-store-name"><?php echo($name[$i]);?></div><div class="wb-store-price">&#8377;<?php echo ($cost[$i]);?></div></div>
			 <?php } ?>

			 </div>
			   
			   
			   
			    <?php for($i=0;$i<$num;$i++) {?>
    <div class="wb-store-details" style="display: none;" data-image="<?php echo($src[$i]);?>" data-name="<?php echo($name[$i]);?>" data-sku="prod<?php echo $i;?>" data-price-str="&#8377;<?php echo ($cost[$i]);?>" data-price="&#8377;<?php echo ($cost[$i]);?>">
	             <div class="wb-store-controls"><div><button type="button" class="wb-store-back btn btn-default">&lt; Back</button></div></div>
				 <div class="wb-store-image"><img src="<?php echo($src[$i]);?>" alt="<?php echo($name[$i]);?>"></div>
				 <div class="wb-store-properties">
				                <div class="wb-store-name"><?php echo($name[$i]);?></div>
								<div class="wb-store-pcats">
								      <div class="wb-store-label">Category:</div>Clothes</div>
							    <div class="wb-store-sku"><div class="wb-store-label">SKU:</div>prod01</div>
								<div class="wb-store-price"><div class="wb-store-label">Price:</div>&#8377;<?php echo ($cost[$i]);?></div>
                                <div class="wb-store-desc">Our company is constantly evolving and growing. We provide wide range of services. Our mission is to provide best solution that helps everyone.</div>
								<a href="placeorder.php?order=<?php echo ($src[$i]); ?> "  target="_self"><button style="margin-top:20px;">ORDER NOW</button></a>
		                <!--     <input type="button" value="ORDER NOW" onclick="orderbtn(<?php echo($src[$i]); ?>)"/>-->
				</div>
	</div>
	
	
	<?php } ?>
	
 <div class="wb-store-cart-details" style="display:none;" ><div class="wb-store-controls"><div><button type="button" class="wb-store-back btn btn-default">&lt; Back</button></div></div><table class="wb-store-cart-table"><thead><tr><th style="width: 1%;"> </th><th> </th><th style="width: 1%;">Qty</th><th style="width: 1%;">Price</th></tr><th></th></thead><tbody><tr><td style="width: 100%;">The cart is empty</td>
				</tr><tr><td>{{name}} (SKU: {{sku}}) (Price: {{price}}) (Qty: {{qty}})</td>
				</tr><tr><td class="wb-store-cart-table-img"> </td>
					<td class="wb-store-cart-table-name"> </td>
					<td class="wb-store-cart-table-quantity"><input type="text" class="form-control"></td>
					<td class="wb-store-cart-table-price"> </td>
					<td class="wb-store-cart-table-remove"><span title="Remove">X</span></td>
				</tr></tbody><tfoot><tr><th colspan="3" class="wb-store-cart-table-totals"> Total:</th><td class="wb-store-cart-sum"> </td><td></td></tr></tfoot></table><div class="wb-store-pay-btns"><div class="wb-store-form-block"><div class="wb-store-form-buttons"><button type="button" class="wb-store-inquiry-btn btn btn-success">Inquire</button></div><div id="wb_element_instance77" class="wb-store-form" style="display: none;"><form class="wb_form wb_mob_form" method="post"><input type="hidden" name="wb_form_id" value="5434fdc8"><textarea name="message" rows="3" cols="20" class="hpc"></textarea><table><tr><th>Name&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_0" value="Name"><input class="form-control form-field" type="text" value="" name="wb_input_0"></td></tr><tr><th>E-mail&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_1" value="E-mail"><input class="form-control form-field" type="text" value="" name="wb_input_1"></td></tr><tr><th>Address&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_2" value="Address"><input class="form-control form-field" type="text" value="" name="wb_input_2"></td></tr><tr class="area-row"><th>Comments&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_3" value="Comments"><textarea class="form-control form-field form-area-field" rows="3" cols="20" name="wb_input_3"></textarea></td></tr><tr class="form-footer"><td colspan="2"><button type="submit" class="btn btn-success">Inquery</button></td></tr></table><input type="hidden" name="object"></form><script type="text/javascript">
						</script></div></div></div></div></div><script type="text/javascript">$(function() { window.WBStoreModule.initStore('wb_element_instance76', {"currency":{"code":"USD","prefix":"$","postfix":""}}); });</script></div><div id="wb_element_instance78" class="wb_element" style="width: 100%;">
						<script type="text/javascript">
						
				$(function() {
					$("#wb_element_instance78").hide();
				});
			</script>
						</div></div>
			
			
			
			
			
			
			
<div class="vbox wb_container" id="wb_footer" style="height: 124px;">
	
<div id="wb_element_instance75" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2016 <a href="http://mrinalini.esy.es">mrinalini.esy.es</a></p></div><div id="wb_element_instance79" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(60);
				}
			});
			</script><script src="js/windowcent.js" type="text/javascript"></script></div></div><div class="wb_sbg"></div></div></body>
</html>
