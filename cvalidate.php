<?php
//7799037833
$button=isset($_POST['button']);
if($button){$con = mysqli_connect("mysql.hostinger.in","u644468346_saanv","7799037833","u644468346_bot");
	session_start();
$orderid= $_SESSION['dressid'];
	$name=$_POST['name'];
	$cellno=$_POST['cell'];
	$nation=$_POST['year'];
$email=$_POST['email'];
	$content=$_POST['adress'];
 $_SESSION['name']=$name;
 $_SESSION['cell']=$cellno;
  $_SESSION['email']=$email;
 $_SESSION['adress']=$content;
$get=mysqli_query($con,"SELECT * FROM file WHERE dest='$orderid'");
$row = mysqli_fetch_array($get);
$dprice=$row['cost'];
$dname=$row['dname'];	   
$to = $email;
$subject = 'Request Order';
$from = "saanvivarnacreations@gmail.com";
$imgsrc="http://mrinalini.esy.es/"."$orderid";
$logsrc="http://saanvivarna.pe.hu/gallery/saanvivarna.png";
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
 
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" ;
//    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<center><img src="'.$logsrc.'" height="80" width="150" ></center><hr/>';
$message .= '<h1 style="color:#77d3c4;">Hi!!'.$name.'</h1>';
$message .=  '<table><tr><td><a href="'.$imgsrc.'">';
$message .= '<img src="'.$imgsrc.'" height="200" width="200" ></a></td>';
$message .= '<td>'.$dname.'</td>';
$message .= '<td>&#8377;'.$dprice.'</td></tr></table>';
$message .= '<p style="color:#77d3c4;">your order has been placed ,we will approach you as soon as possible<br>your order:</p>';

$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Request processed';
	    unset($_SESSION['dressid']);
		echo '<script> setTimeout("window.close();", 3000);</script>';
} else{
    echo 'Serverdown please try after some time ';unset($_SESSION['dressid']);echo '<script> setTimeout("window.close();", 3000);</script>';
}                       






	
	
}
?>