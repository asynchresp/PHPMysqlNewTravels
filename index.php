<?php
session_start();

if( isset($_SESSION["from"]))
{
	if( strcmp($_SESSION["from"], "logout.php") == 0 ) //if it is from logout.php
	{
	session_destroy();
	$_SESSION = array();
	unset($_SESSION["from"]);

	}
	//if it is from user or admin
	else if(strcmp($_SESSION["from"], "user.php") == 0  || strcmp($_SESSION["from"], "admin.php") == 0 ) 
	{
		//echo "from ".$_SESSION["from"];
		header("location:".$_SESSION["from"]);
		exit();
	}
	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Travels Pvt. Ltd.</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="layout">
    <?php include("header.php"); ?>
    <div id="contents">

       <!-- <div id="menu" >
        </div>-->
        <div id="container" >
           	<?php
				if( isset($_SESSION["success_in_signup"]) )//if it has been set, i.e this page is loaded from signup_page.php
				{
					echo "<center><label>$_SESSION[success_in_signup]</label></center>";
				
					//for checking again later
					unset($_SESSION["success_in_signup"]);
				}
            	include("login_page.php");
			?>             

       </div>
    </div>
	<?php include("footer.php"); ?>
</div>
</body>
</html>