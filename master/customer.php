<!DOCTYPE HTML> 
<html>
	<head>
    	<title>Customer</title>
	</head>
	<body>
    <center>
		<div >
        <form name="customer" action="customer.php" method="post">
       	  <table border="0" align="center">
          		
                <tr align="center">
                	<td colspan="5"><input type="submit" name="submit" value="Insert"/></td>
                </tr>
                
				<tr align="left" >
                	<td><label>Admin</label></td>
                    <td colspan="4"><label>Date</label></td>
				</tr>
                
                <tr align="left">
                	<td><label>Code</label></td>
                    <td colspan="4"><input type="text" name="code" /></td>
				</tr>
                
                <tr align="left">
                	<td><label>Company</label></td>
                    <td colspan="4"><input type="text" name="company" /></td>
				</tr>
                
                <tr align="left">
                	<td><label>Contact Name</label></td>
                    <td colspan="4"><input type="text" name="contact_name" /></td>
				</tr>
                
                <tr align="left">
                	<td><label>Designation</label></td>
                    <td colspan="4"><input type="text" name="designation" /></td>
				</tr>
                
                <tr align="left">
                	<td><label>Address1</label></td>
                    <td><textarea name="address1"></textarea></td>
                	<td><label>Address2</label></td>                    
                    <td><textarea name="address2"></textarea></td>                    
                    <td></td>
                    
				</tr>
                
                <tr align="left">
                	<td><label>City</label></td>
                    <td><input type="text" name="city" /></td>
                    <td><label>State</label></td>
                    <td><input type="text" name="state" /></td>
				</tr>
                
                <tr align="left">
                	<td><label>Zip</label></td>
                    <td><input type="text" name="zip" /></td>
                    <td><label>Country</label></td>
                    <td>
                    	<select name="country">
                        	<option name="">value1 </option>
                            <option name="">value2 </option>
                            <option name="">value3 </option>
                    	</select>
                    </td>
				</tr>
                
                <tr align="left" >
                	<td><label>Email</label></td>
                    <td><input type="text" name="email"></td>
                    <td><label>Account Code</label></td>
                    <td>
                    	<select name="account_code">
                        	<option name="">value1 </option>
                            <option name="">value2 </option>
                            <option name="">value3 </option>
                    	</select>
                    </td>
                    <td></td>
				</tr>
                
                <tr align="left" >
                	<td><label>Homepage</label></td>
                    <td ><input type="text" name="homepage"></td>
                    <td><label>Vendor Code</label></td>
                    <td><input type="text" name="vender_code"></td>
				</tr>                
                
          </table>
        </form>
    	</div> 
        <br/><br/><br/><br/><br/>
        
        <div>
        <form name="customer" action="customer.php" method="post">
        
            <input type="submit" name="submit" value="View"/>
        </form>
	    </div>
	</center>
	</body>
</html>