<?php
$con=mysqli_connect("mysql.hostinger.in","u644468346_saanv","7799037833","u644468346_bot");

$tid=$_GET['id'];
 $get=mysqli_query($con,"SELECT * FROM file WHERE id='$tid'  ");
  $get2= mysqli_fetch_assoc($get);
  $path=$get2['dest'];
  $kdir=$get2['dir'];
  $ksdir=$get2['sdir'];
unlink($path);
$sql = "DELETE FROM file WHERE id=$tid";

mysqli_query($con, $sql); 
//session_destroy();
mysqli_close($con);
 header("Location:admin.php?mdir=$kdir&sir=$ksdir"); 
      
?>