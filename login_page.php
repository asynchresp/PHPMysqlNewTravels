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
		header("location:".$_SESSION['from']);
//		exit();
	}
	
}

?>
<html>
<head>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <style type="text/css">
 body {
	background-color: #fff;
}
 body,td,th {
	color: #399;
}
 </style>
</head>
<body>

	<form name="login_form" method="post" action="verify_login.php">
	
<br/><br/><br/><br/>
	  <table width="387" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#a0a0a0">
		<tr>
			<td colspan="3" bgcolor="#33CC66"><strong>Login </strong></td>
		</tr>
		<tr style="color:blue;">
			<td width="118" align="right" bgcolor="#33CC66"> Username</td>
		  <td width="6" bgcolor="#33CC66">:</td>
			<td width="247" align="center" bgcolor="#33CC66"><input name="username" type="text" id="username"></td>
		</tr>
		<tr style="color:blue;">
			<td align="right" bgcolor="#33CC66">Password</td>
		  <td bgcolor="#33CC66">:</td>
			<td align="center" bgcolor="#33CC66"><input name="password" type="password" id="password"></td>
		</tr>
		<tr style="color:blue;">
			<td bgcolor="#33CC66">&nbsp;</td>
			<td bgcolor="#33CC66">&nbsp;</td>
			<td align="center" bgcolor="#33CC66"><input type="submit" name="Submit" value="Login"></td>
		</tr>
		</table>
        <?php

if( isset($_SESSION["wrong_UP"]) && strcmp($_SESSION["wrong_UP"],"error") == 0 )
{
	echo  "<center><p style='margin-top:10px;position:relative;color:red;'>Incorrect username or password.</p></center>";
	//for checking again later
	unset($_SESSION["wrong_UP"]);
	
}
?>
	</form>


</body>
</html>
