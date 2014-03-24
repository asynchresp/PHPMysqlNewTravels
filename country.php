<!DOCTYPE HTML> 
<html>
	<head>
    	<title>Country</title>
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
        <form name="country" action="country.php" method="post">
       	  <table border="0" align="center">
          		<tr align="center">
                	<input type="submit" name="submit" value="Insert"/>
                    <br/><br/>
                </tr>
                
                <tr>
                	<td><label>Code</label></td>
                    <td><input type="text" name="code"/></td>
                	<td><label>Name</label></td>
                    <td><input type="text" name="name"/></td>
                </tr>
                
                <tr>
                	<td><label>Country</label></td>
                    <td><input type="text" name="country"/></td>
                	<td><label>Description</label></td>
                    <td><input type="text" name="description"/></td>
                </tr>
                
                <tr>
                	<td><label>Format</label></td>
                    <td><input type="text" name="format"/></td>
                	<td><label>Decimal</label></td>
                    <td><input type="text" name="decimal"/></td>
                </tr>
                
                <tr>
                	<td><label>Name</label></td>
                    <td colspan="3"><input type="text" name="name"/></td>
                </tr>
                
                <tr><td><br/></td></tr>
                
                <tr>
                	<td colspan="2"><label>Airline Code</label></td>
                    <td colspan="2"><label>Airline Name</label></td>
                </tr>
                <tr>
                	<td colspan="2"><input type="text" name="airline_code"/></td>
                    <td colspan="2"><input type="text" name="airline_name"/></td>
                </tr>    
           
            
          </table>
        </form>
    	</div> 
        <br/><br/><br/><br/><br/>
        
        <div>
        <form name="country" action="country.php" method="post">
        
            <input type="submit" name="submit" value="View"/>
        </form>
	    </div>
        
   </div>

</div>
<?php include("footer.php"); ?>
	</body>
</html>