<?php
session_start();

if(strcmp($_SESSION["valid"],"true") == 0) 
{
	$_SESSION["from"] = "check_ad_user.php";
	
	if( strcmp($_SESSION["myusername"] , "admin")  == 0)
		header("location:admin.php");
	else
		header("location:user.php");
				
	//for checking the validity again,
	unset($_SESSION["valid"]);	
}
else
{		
//	header("location:login_page.php");
	header("location:index.php");
	exit();
}

//OR

/*
if( isset($_SESSION["myusername"]) && isset($_SESSION["mypassword"]) )
{
	if( strcmp($_SESSION["myusername"] , "admin")  == 0)
		header("location:admin.php");
	else
		header("location:user.php");
		
		//for late checking
		unset($_SESSION["myusername"]);
		unset($_SESSION["mypassword"]);
}
else
{		
//	header("location:login_page.php");
	header("location:index.php");
	exit();
}
*/
?>