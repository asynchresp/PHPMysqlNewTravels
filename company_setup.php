<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cpmpany Setup</title>
</head>

<body>
<div id="layout">
	<?php include("header.php"); ?>
    <div id="contents">
    	<div id="menu">
        	<?php include("admin_menu.php"); ?>
        </div>
        <div id="container">
        	<center><h1>Company Setup</h1></center>
            
            <form name="company_setup" action="company_setup.php" method="post">
       	  <table border="0" align="center">
          		            	
                <tr align="left">
                	<td><label>Code</label></td>
                    <td colspan="3"><input type="text" name="code" /></td>
				</tr>
                
                <tr align="left">
                	<td><label>Business Name</label></td>
                    <td colspan="3"><input type="text" name="business_name" /></td>
				</tr>
                
                <tr align="left">
                	<td><label>Address 1</label></td>
                    <td colspan="3"><input type="text" name="address1" /></td>
				</tr>
                
                <tr align="left">
                	<td><label>Address 2</label></td>
                    <td colspan="3"><input type="text" name="address2" /></td>
				</tr>
                
                <tr align="left">
                	<td><label>City</label></td>
                    <td><input type="text" name="city" /></td>
                    
                    <td><label>State</label></td>
                    <td><input type="text" name="state" /></td>    
                </tr>
                
                <tr align="left">
                	<td><label>Postal Code/Zip</label></td>
                    <td><input type="text" name="postal_code_or_zip" /></td>
                    
                    <td><label>Country</label></td>
                    <td><input type="text" name="country" /></td>
				</tr>
                
                <tr align="left">
                	<td><label>Phone</label></td>
                    <td><input type="text" name="phone" /></td>
                    
                    <td><label>Fax</label></td>
                    <td><input type="text" name="fax" /></td>
				</tr>
                
                <tr align="left">
                	<td><label>Email</label></td>
                    <td colspan="3"><input type="text" name="email" /></td>
				</tr>
                
                <tr align="left">
                	<td><label>Web Site</label></td>
                    <td colspan="3"><input type="text" name="web_site" /></td>
				</tr>

                <tr align="left">
                	<td><label>Registration Ref#</label></td>
                    <td colspan="3"><input type="text" name="registration_ref_num" /></td>
				</tr>                
                
	           <tr align="left">
                	<td><label>Software License No.</label></td>
                    <td colspan="2"><input type="text" name="company" /></td>
                    <td> <input type="submit" name="submit" value="Validate"/> </td>
				</tr>
            
          </table>
        </form>
    	</div> 
        
           </div>
           </div>
           <?php include("footer.php"); ?>
           </div>
</body>
</html>