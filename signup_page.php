<?php
session_start();
?>

<html>
<head>
<title>Sign Up</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body,td,th {
	color: #36C;
}
</style>
</head>

<body style="color: #399;">
<div id="layout">
<?php include("header.php"); ?>
<br/>
<div id=contents">
<form name="sign_up"method="post" action="create_user.php" >
	<table width="350" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#33CC66">
<!-- ------------------------------------------------------------------------->        
		<tr height="50px">
    		<td align="left">
	    	    <label >Your Full Name:</label>
            </td>
            <td align="left">
                <input name="full_name" type="text" value="" maxlength="20" />
	        </td>
        </tr>   
<!-- ------------------------------------------------------------------------->            
		<tr height="50px">            
            <td align="left">
	    	    <label >Your Date of Birth:</label>
            </td>
            <td align="left">
				<input name="birth_date" type="date" min="1980-01-01" max="1999-12-31" /> 
	        </td>
        </tr>               
<!-- ------------------------------------------------------------------------->
		<tr height="50px"> 			
            <td align="left">
	    	    <label >Your Email Address:</label>
            </td>
            <td align="left">
                <input name="email" type="email" value="" maxlength="25" />
	        </td>
        </tr>               
<!-- ------------------------------------------------------------------------->                       
		<tr height="50px">
         	<td align="left">
	    	    <label >Type Your Password:</label>
            </td>
            <td align="left">
                <input name="password_1" type="password" value="" maxlength="20" />
	        </td>                  
        </tr>               
<!-- ------------------------------------------------------------------------->        	
		<tr height="50px">
            <td align="left">
	    	    <label >Confirm Your Password:</label>
            </td>
            <td align="left">
                <input name="password_2" type="password" value="" maxlength="20" />
	        </td>
   		</tr>
<!-- ------------------------------------------------------------------------->                    

		<tr height="50px">
	        <td colspan="2" align="center">
				<label >Your username will be your email address </label>
            </td>
        </tr>
<!-- ------------------------------------------------------------------------->                    
<?php

if( isset($_SESSION["error_in_signup"]) )
{
	//display the content of the variable "error_in_signup"
	echo  "<tr height='50px' style='color:red;'><td colspan='2' align='center'><label>$_SESSION[error_in_signup]</label></td></tr>";


	//for checking again later
	unset($_SESSION["error_in_signup"]);
}

?>
<!-- ------------------------------------------------------------------------->                    

		<tr height="50px">
	        <td colspan="2" align="center">
            	<input type="submit" value="Sign Up" />
            </td>
        </tr>
<!-- ------------------------------------------------------------------------->                    
	</table>
</form>
</div>
<?php include("footer.php"); ?>
</div>


</body>
</html>