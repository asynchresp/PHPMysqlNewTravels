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

echo "<head> <title> Welcome Admin </title> </head>";
/*
if( !isset($_SESSION["from"] ))
{
//	header("location:login_page.php");
	header("location:index.php");
	exit();
}
	//if it is not from check_ad_user.php and from the same page
else if( strcmp( $_SESSION["from"], "check_ad_user.php" ) != 0 && strcmp( $_SESSION["from"], "admin.php" ) != 0 ) 
{
//	header("location:login_page.php");
	header("location:index.php");
	exit();
}*/
$_SESSION["from"] = "admin.php";
?>
<div id="layout">
	<?php include("header.php"); ?>
    <div id="contents">
    	<div id="menu">
        	<?php include("admin_menu.php"); ?>
        </div>
        <div id="container">
        	<?php echo  "<a href='logout.php'>Logout</a>"; ?>
           </div>
           </div>
           <?php include("footer.php"); ?>
           </div>


