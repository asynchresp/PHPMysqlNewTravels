<?php 
session_start();
/*
	//if it is not from admin.php AND user.php
if( !isset($_SESSION["from"]) || strcmp( $_SESSION["from"], "admin.php" ) != 0 && strcmp( $_SESSION["from"], "user.php" ) != 0 ) 	
{
	header("location:login_page.php");
	
	$_SESSION["from"] = "logout.php";
	unset($_SESSION["from"]);
	exit();
}
*/
//it comes from any where...
$_SESSION["from"] = "logout.php";
//header("location:login_page.php");
	header("location:index.php");
exit();
?>