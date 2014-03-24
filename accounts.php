<!DOCTYPE HTML> 
<html>
	<head>
    	<title>Accounts</title>
	</head>
	<body> 
    <div id="layout">
<?php include("header.php"); ?>
<div id="contents">
<div id="menu">
<?php include("admin_menu.php"); ?>
</div>
 <div id="container">
	    <div >
        <form name="accounts" action="accounts.php" method="post">
       	  <table border="0" align="center">
          		<tr>
                	<input type="submit" name="submit" value="Insert"/>
                </tr>
            	<tr align="center">
                	<td><label>Code</label></td>
                    <td><label>Account Name</label></td>
                    <td><label>Account Type</label></td>
                </tr>
                <tr >
                	<td><input type="text" name="code" /></td>
	          	    <td><input type="text" name="account_name" /></td>
                    <td>
                    	<select name="account_type">
                        	<option name="">value1 </option>
                            <option name="">value2 </option>
                            <option name="">value3 </option>
                    	</select>
                     </td>     
	            </tr>
            
          </table>
        </form>
    	</div> 
        <br/><br/><br/><br/><br/>
        
        <div>
        <form name="accounts" action="accounts.php" method="post">
        
            <input type="submit" name="submit" value="View"/>
        </form>
	    </div>
        
 </div>

</div>
<?php include("footer.php"); ?>
	</body>
</html>