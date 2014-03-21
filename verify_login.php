<<<<<<< HEAD
<?php
	session_start();
		
if( !isset( $_POST['username']) || !isset( $_POST['password']))	//if this page is not requested from login page
{
//	header("location:login_page.php");
	header("location:index.php");
	exit();
}

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="new_travels"; // Database name 
$tbl_name="accounts"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

//TODO :- Decrypt the password and compare in the database
$key = "KeyValue";
$mypassword = mcrypt_ecb(MCRYPT_DES, $key, $mypassword, MCRYPT_ENCRYPT);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

	// Register $myusername, $mypassword and redirect to file "login_success.php"
	$_SESSION["valid"] = "true";//used by check_ad_user.php
	
	$_SESSION["myusername"] = $myusername;
	$_SESSION["mypassword"] = $mypassword;

	header("location:check_ad_user.php");

}
else {
	//echo "Wrong Username or Password";

	$_SESSION["wrong_UP"] = "error";
//	header("location:login_page.php");
	header("location:index.php");
	exit();
}

=======
<?php
	session_start();
		
if( !isset( $_POST['username']) || !isset( $_POST['password']))	//if this page is not requested from login page
{
//	header("location:login_page.php");
	header("location:index.php");
	exit();
}

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="new_travels"; // Database name 
$tbl_name="accounts"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

//TODO :- Decrypt the password and compare in the database
$key = "KeyValue";
$mypassword = mcrypt_ecb(MCRYPT_DES, $key, $mypassword, MCRYPT_ENCRYPT);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

	// Register $myusername, $mypassword and redirect to file "login_success.php"
	$_SESSION["valid"] = "true";//used by check_ad_user.php
	
	$_SESSION["myusername"] = $myusername;
	$_SESSION["mypassword"] = $mypassword;

	header("location:check_ad_user.php");

}
else {
	//echo "Wrong Username or Password";

	$_SESSION["wrong_UP"] = "error";
//	header("location:login_page.php");
	header("location:index.php");
	exit();
}

>>>>>>> 28bc26aadc4a73a256d9c385a8e3a0461cab5e29
?>