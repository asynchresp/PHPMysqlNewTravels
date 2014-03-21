<<<<<<< HEAD

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
echo "Welcome user:<br/>";
echo "<ul><li><a href='index.php'>User menu1</a> </li><li><a href='index.php'>User menu2</a> </li><li><a href='index.php'>User menu3</a> </li></ul>";	

echo  "<a href='logout.php'>Logout</a>";
=======

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
echo "Welcome user:<br/>";
echo "<ul><li><a href='index.php'>User menu1</a> </li><li><a href='index.php'>User menu2</a> </li><li><a href='index.php'>User menu3</a> </li></ul>";	

echo  "<a href='logout.php'>Logout</a>";
>>>>>>> 28bc26aadc4a73a256d9c385a8e3a0461cab5e29
?>