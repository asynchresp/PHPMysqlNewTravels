<?php
session_start();

	
?>

<html>
<head>
<title>Sign Up</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!-- from the example -->
	<link href="default.css" rel="stylesheet" type="text/css" media="all" />
	<script src="jquery-1.6.2.min.js"></script>
	<script src="jquery-ui-1.8.15.custom.min.js"></script>
	<link rel="stylesheet" href="jqueryCalendar.css">
    <link rel="stylesheet" href="style.css" />
    
	<script>
    	jQuery( function(){ jQuery( "#birth_date" ).datepicker(); } );
	</script>
<!-- ^^^^^^from the example ^^^^^-->

<style type="text/css">
body,td,th {
	color: #36C;
}
</style>
</head>

<body style="color: #399;">

<div id="layout">
<?php include("header.php"); ?>

<form name="sign_up"method="post" action="create_user.php" >
	<table width="350" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#33CC66">
<!-- ------------------------------------------------------------------------->        
		<tr height="50px">
    		<td align="left">
	    	    <label >Your Full Name</label>
            </td>
            <td><label >:</label></td>
            
            <td align="left">
                <input name="full_name" type="text" value="" maxlength="20" />
	        </td>
        </tr>   
<!-- ------------------------------------------------------------------------->            
		<tr height="50px">            
            <td align="left">
	    	    <label >Your Date of Birth (dd/mm/yyyy)</label>
            </td>
            <td><label >:</label></td>
            
            <td align="left">
				<input name="birth_date" id="birth_date" type="text" />                
	        </td>
        </tr>               
<!-- ------------------------------------------------------------------------->
		<tr height="50px"> 			
            <td align="left">
	    	    <label >Your Email Address</label>
            </td>
            <td><label >:</label></td>
            
            <td align="left">
                <input name="email" type="email" value="" maxlength="25" />
	        </td>
        </tr>               
<!-- ------------------------------------------------------------------------->                       
		<tr height="50px">
         	<td align="left">
	    	    <label >Type Your Password</label>
            </td>
            <td><label >:</label></td>
            
            <td align="left">
                <input name="password_1" type="password" value="" maxlength="15" />
	        </td>                  
        </tr>               
<!-- ------------------------------------------------------------------------->        	
		<tr height="50px">
            <td align="left">
	    	    <label >Confirm Your Password</label>
            </td>
            <td><label >:</label></td>
            
            <td align="left">
                <input name="password_2" type="password" value="" maxlength="15" />
	        </td>
   		</tr>
<!-- ------------------------------------------------------------------------->                    

		<tr border="1" height="30px">
	        <td colspan="3" align="center">
				<label >Your username will be your email address </label>
            </td>
        </tr>
<!-- ------------------------------------------------------------------------->                    
<?php

if( isset($_SESSION["error_in_signup"]) )
{
	//display the content of the variable "error_in_signup"
	echo  "<tr height='30px' ><td style='color:red;' colspan='3' align='center'><label>$_SESSION[error_in_signup]</label></td></tr>";


	//for checking again later
	unset($_SESSION["error_in_signup"]);
}

?>
<!-- ------------------------------------------------------------------------->                    

		<tr height="50px">
	        <td colspan="3" align="center">
            	<input type="submit" value="Sign Up" />
            </td>
        </tr>
<!-- ------------------------------------------------------------------------->                    
	</table>
</form>


<?php include("footer.php"); ?>
</div>
</body>

</html>