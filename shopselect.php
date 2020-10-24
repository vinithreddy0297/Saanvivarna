<?php
session_start();
$_SESSION["dir1"] = $_GET['dir'];
header("Location:shop.php"); 
?>