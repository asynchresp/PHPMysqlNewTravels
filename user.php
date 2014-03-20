
<style type="text/css">
body {
	background-color: #fff;
}
body,td,th {
	color: #399;
}
</style>
<?php
session_start();

echo "<head> <title> Welcome User </title> </head>";

if( !isset($_SESSION["from"] ))
{
//	header("location:login_page.php");
	header("location:index.php");
	exit();
}
	//if it is not from check_ad_user.php and from the same page
 else if( strcmp( $_SESSION["from"], "check_ad_user.php" ) != 0 && strcmp( $_SESSION["from"], "user.php" ) != 0 ) 
{
	
//	header("location:login_page.php");
	header("location:index.php");
	exit();
}

$_SESSION["from"] = "user.php";


// user menus
?>

<div id="layout">

<?php include("header.php");?>

<div id="contents">
	<div id="menu">
    	<?php include("user_menu.php"); ?>
    </div>
    <div id="container">
    	<?php echo  "<a href='logout.php'>Logout</a>"; ?>

    </div>
</div>
<?php include("footer.php"); ?>
</div>
