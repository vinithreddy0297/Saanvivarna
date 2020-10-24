       <?php
	  
	$con = mysqli_connect("mysql.hostinger.in","u644468346_saanv","7799037833","u644468346_bot");
session_start();
$username= $_SESSION['myValue1'];
$password= $_SESSION['myValue2'];
$id=$_SESSION['myValue7'];
$get=mysqli_query($con,"SELECT * FROM Admin WHERE id='$id'  ");
if(mysqli_num_rows($get)){
        $num=0;
        $con = mysqli_connect("mysql.hostinger.in","u644468346_saanv","7799037833","u644468346_bot");
	$button=isset($_POST['button']);
	$gbut=isset($_GET['mdir']);
	if($button){
		$mkd=$_POST['slct3'];
 $skd=$_POST['slct4'];
		 $get=mysqli_query($con,"SELECT * FROM file WHERE dir='$mkd' AND sdir='$skd'  ");
         $num=mysqli_num_rows($get);
	
 
 while($row = mysqli_fetch_array($get)) {
    // Append to the array
    $fname[] = $row['filename'];  
	$src[]=$row['dest'];
	$delid[]=$row['id'];$name[]=$row['dname'];
	$cost[]=$row['cost'];
	//$keet[]=$row['dno'];
   // $bhanu[]=$row['qno']; 
   }
	
	}
elseif($gbut)	{
	
		$mkd=$_GET['mdir'];
 $skd=$_GET['sir'];
		 $get=mysqli_query($con,"SELECT * FROM file WHERE dir='$mkd' AND sdir='$skd'  ");
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
}}else{
 header("Location:adminlogin.php"); 
}

?> 



<html>
<head>
<script src="js/keerthi.js"></script>
<script>
function _(el){
	return document.getElementById(el);
}
function uploadFile(){
	
	
	var file = _("file_upload").files[0];
	// alert(file.name+" | "+file.size+" | "+file.type);
	//var internChoice = _("#slct1 option:selected").val();
	var e = document.getElementById("slct1");
	var f = document.getElementById("slct2");
var strUser = e.options[e.selectedIndex].value;
var str2val = f.options[f.selectedIndex].value;
var hname    = document.getElementById("displayname"); 
var name   = hname.value;
var cost    = document.getElementById("price").value; 
	//console.log(strUser);
	var formdata = new FormData();
	formdata.append("file_upload", file);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	var url="upload.php?dir="+strUser+"&subdir="+str2val+"&name="+name+"&cost="+cost;
	ajax.open("POST",url);
	
	ajax.send(formdata);
	
}
function progressHandler(event){
	_("loaded_n_total").innerHTML = "Uploaded "+(event.loaded/ 1000000)+" Mb of "+(event.total/ 1000000);
	var percent = (event.loaded / event.total) * 100;
	_("progressBar").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
	 
	
}
function progressHandler(event){
	_("loaded_n_total").innerHTML = "Uploaded "+(event.loaded/ 1000000)+" Mb of "+(event.total/ 1000000);
	var percent = (event.loaded / event.total) * 100;
	_("progressBar").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
	 
               
}
function completeHandler(event){
	_("status").innerHTML = event.target.responseText;
	_("progressBar").value = 0;
	
}
function errorHandler(event){
	_("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
	_("status").innerHTML = "Upload Aborted";
}</script><style>body form{
                text-decoration: none;
                font-family: cursive;
                padding-top: 30px;
				text-align:center;
                border-radius: 15px;
                width:302px;
                height: 300px;
                background-color: rgba(0,0,0,0.5);
                    margin-top: 50px;
			    margin-left: 25px;
    
color:#4115ad;
                
            }
			 body form input {
				 align :center;
                border: 0;
                text-align: center;
                width:60%;
                height: auto;
                border-radius: 5px;
				color:#172e4b;
            }
			#gallery{width :auto;
			height:auto;
			position :absolute;
			left:350px;
			top :100px;
			display:inline-block;
			
			
			}
			
			#viewerform{ text-decoration: none;
                font-family: cursive;
                padding-top: 30px;
				text-align:center;
                border-radius: 15px;
                width:auto;
                    height: 60px;
    padding: 20px;position :absolute;
			left:350px;
			top :-45px;
            color:#4115ad;    background-color: antiquewhite;
				
			}
			
		.container {
  display:inline-block;
  width: 250px;
  height: 250px;
  padding:20px;
}

.title {
  position: relative;
  width: 240px;
  left: 2;
  top: -180;
  font-weight: 700;
  font-size: 30px;
  text-align: center;
  text-transform: uppercase;
  color: white;
  z-index: 1;
  transition: top .5s ease;
}.container:hover .title {
  top: -150px;
}

.button {
  
  width: 240px;
    position:relative;
	top:-150px;
	left:2;	
  text-align: center;
  opacity: 0;
  transition: opacity .35s ease;
}

.button a {
  width: 200px;
  padding: 12px 48px;
  text-align: center;
  color: white;
  
  z-index: 1;
}




.container:hover .button {
  opacity: 1;
}
#wb_element_instance7 { left: 60px; top: 447px; min-width: 180px; width: 180px; min-height: 60px; height: 60px; display: block; z-index: 343; }
#wb_element_instance7 .wb_button span { padding: 15px 0px 0px 0px; }
#wb_element_instance7 .wb_button { width: 180px; height: 60px; }
#wb_element_instance7 .wb_button { font-family: Tahoma,Geneva,sans-serif; font-size: 18px; text-align: center; border: 2px solid #77d3c4; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; color: #77d3c4; font-style: normal; font-weight: normal; text-decoration: none; background: transparent none repeat scroll left top; }
#wb_element_instance7 .wb_button:hover { color: #ffffff; font-style: normal; font-weight: normal; text-decoration: none; background: #77d3c4 none repeat scroll left top; }
#wb_element_instance7 .wb_button:active { color: #ffffff; font-style: normal; font-weight: normal; text-decoration: none; background: #77d3c4 none repeat scroll left top; }</style>
<title>SaanviVarna-Admin</title>
</head>
<body>
<!--<a href="logout.php" style="text-decoration:none; padding:5px; font-size:30px;border:1px solid #77d3c4; color:#77d3c4; float:right; margin-top:-25px;" id="logoutbtn">Logout</a>-->
<div id="wb_element_instance7" class="wb_element" style="float:right; margin-top:-25px; margin-right:-25px;"><a class="wb_button" style="padding:10px;" href="logout.php"><span>Logout</span></a></div>
<div id="uploader" ><form align="left" id="upload_form"  enctype="multipart/form-data"  method="post">

Choose  Make:
<select id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
  <option value=""></option>
  <option value="sarees">Sarees</option>
  <option value="dresses">Dresses</option>
  <option value="lehengas">Lehengas</option>
  <option value="kids_fashions">kids fashions</option>
  <option value="fabric">fabric</option>
</select><br><br>
Choose  Model:
<select id="slct2" name="slct2"></select><br><br>
Name:
<input type="text" name="displayname" id="displayname"><br><br>
Price:
<input type="text" name="price" id="price"><br><br>
  <input type="file" name="file_upload" id="file_upload"><br><br>
  <input type="button" id="uploadbutton"  value="Upload Image" onclick="uploadFile()"><br><br>
  <progress id="progressBar" value="0" max="100" style="width:50%;"></progress>
  <h3 id="status"></h3>
  <p id="loaded_n_total"></p>
<p>note: file size must be less than 10 Mb</p>

</form></div>



<div id="viewer">
<form id="viewerform" action="admin.php" method="POST">
Choose  Make:
<select id="slct3" name="slct3"     onchange="populate(this.id,'slct4')">
  <option value=""></option>
  <option value="sarees">Sarees</option>
  <option value="dresses">Dresses</option>
  <option value="lehengas">Lehengas</option>
  <option value="kids_fashions">kids fashions</option>
  <option value="fabric">fabric</option>
</select>
Choose  Model:
<select id="slct4" name="slct4"></select>
<input type="submit" name="button" style="width:90px; padding:20px;"value="choose"><br>
</form></div>
<div id="gallery">
<?php for($i=0;$i<$num;$i++) {?>
<div class="container">
  <img src="<?php echo($src[$i]);?>"  height="250" width="250">
  <p class="title"><?php echo($name[$i]);?></p>
  <div class="button"><a href="delete.php?id=<?php echo $delid[$i];?>"> <img src="remove.png"  height="25" width="25"></a></div>
</div>
<?php } ?>


</div>
</body></html>