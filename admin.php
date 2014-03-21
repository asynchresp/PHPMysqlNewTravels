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
}
$_SESSION["from"] = "admin.php";

// admin menus
echo "Welcome admin:<br/>";
echo "<ul><li><a href='index.php'>Admin menu1</a> </li><li><a href='index.php'>Admin menu2</a> </li><li><a href='index.php'>Admin menu3</a> </li></ul>";

echo  "<a href='logout.php'>Logout</a>";
?>