<?php
	session_start();
		
if( !isset( $_POST['full_name']) )	//if this page is not requested from login page
{
	header("location:index.php");
	exit();
}

$host="localhost"; // Host name 
$db_username="root"; // Mysql username 
$db_password=""; // Mysql password 
$db_name="new_travels"; // Database name 
$tbl_name="accounts"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$db_username", "$db_password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// sign up information sent from form 
$full_name = mysql_real_escape_string($_POST['full_name']); 
$birth_date = mysql_real_escape_string($_POST['birth_date']); 
$email = mysql_real_escape_string($_POST['email']); 
$password_1 = mysql_real_escape_string($_POST['password_1']); 
$password_2 = mysql_real_escape_string($_POST['password_2']); 

$username = "";
$password = "";

//check whether any feild is empty
if( strcmp($full_name, "") == 0)	
{
	$_SESSION["error_in_signup"] = "Name is not specified.";
	header("location:signup_page.php");
	exit();
}
else if( strcmp($birth_date, "") == 0)	
{
	$_SESSION["error_in_signup"] = "Birth Date is not specified.";
	header("location:signup_page.php");
	exit();
}
else if( strcmp($email, "") == 0)	
{
	$_SESSION["error_in_signup"] = "Email is not specified.";
	header("location:signup_page.php");
	exit();
}
else if( strcmp($password_1, "") == 0 || strcmp($password_2, "") == 0)	
{
	$_SESSION["error_in_signup"] = "Password is not specified.";
	header("location:signup_page.php");
	exit();
}

//chack whether password_1 and password_2 are same
else if( strcmp($password_1,$password_2) != 0 )
{
	//if both are not equal 
	$_SESSION["error_in_signup"] = "Password is not matched.";
	header("location:signup_page.php");
	exit();
}
else
{
	//else store any one as the password
	$password = $password_1;
	//TODO :- Encrypt the password and store into database
	$key = "KeyValue";
	$password = mcrypt_ecb(MCRYPT_DES, $key, $password, MCRYPT_ENCRYPT);
	
	//username is same as email id
	$username = $email;
	
}

$sql="INSERT INTO $tbl_name(full_name,birth_date,email,username,password) VALUES('$full_name','$birth_date','$email','$username','$password')";
$result=mysql_query($sql);

if( !$result )		//if the insertion fails....
{
	$_SESSION["error_in_signup"] = "Cannot create the user account.";
	header("location:signup_page.php");
	exit();
}
else				//if insertion succeeds
{
	$_SESSION["success_in_signup"] = "Your account has been created successfully. You can Login now."; 
	header("location:index.php");
	exit();
}
?>