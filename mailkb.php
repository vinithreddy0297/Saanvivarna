<?php
$to1='ankojubhanuprakash@gmail.com';
$to = $to1;
$subject = 'Request Order';
$from = $to1;
$imgsrc="http://mrinalini.esy.es/img/img1.jpg";
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
$message .= '<img src="'.$logsrc.'" height="400" width="400" >';
$message .= '<h1 style="color:#f40;">Hi!!</h1>';
$message .= '<img src="'.$imgsrc.'" height="200" width="200" >';
$message .= '<p style="color:#f40;">your order has been placed ,we will approach you as soon as possible<br>your order:</p>';
$message .= '<a href="http://mrinalini.esy.es/img/img5.jpg">clickme</a>';
$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Your mailtyggfusgsysusususus has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>