<?php
$con=mysqli_connect("mysql.hostinger.in","u644468346_saanv","7799037833","u644468346_bot");
$connection = ftp_connect('ftp.mrinalini.esy.es');
$login = ftp_login($connection, "u644468346.saanvivarna", "7799037833");
$gen=$_GET['dir'];
$gen2=$_GET['subdir'];
$dispname=$_GET['name'];
$hcost=$_GET['cost'];


if(!($gen2==NULL)){
	$mgen="$gen/$gen2";
	
}
 if(isset($_FILES['file_upload'])){
	
      $errors= array();
      $file_name1 = $_FILES['file_upload']['name']; 
       $file_name=str_ireplace(" ","_",$file_name1);
      $file_size = $_FILES['file_upload']['size'];
      $file_tmp = $_FILES['file_upload']['tmp_name'];
      $file_type = $_FILES['file_upload']['type'];
$dest="$mgen/$file_name"; 
      #$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
       $exploded = explode('.',$_FILES['file_upload']['name']);
 $file_ext=strtolower(end($exploded));
      $expensions= array("jpeg","jpg","png","doc", "docx","pdf","rar","zip","mp3","mp4","txt","wps","ppt","pptx","xlr","xls","xlsx");
	  
	     if($file_size<=10000000){
			  
			                   if (!$connection || !$login) { die('Connection attempt failed!'); }
                                             
                                             
                                              $source=$file_tmp;
                                              $mode="FTP_ASCII";
                                              $upload = ftp_put($connection, $dest,$source, FTP_BINARY);
                                              if($upload){    $keert= mysqli_query($con,"INSERT INTO file (filename,dname,cost,dest,dir,sdir) VALUES ('$file_name','$dispname','$hcost','$dest','$gen','$gen2')");
                                               echo("success");
                                                                      }

                                               else { echo " FTP upload failed! "; }
                                                
                                                                   }
                                               ftp_close($connection);
	  
	  
	  
	  
	  
	  }
       
	  
                                       
         

		                                    
	
 
 
 
 
 






?> 	