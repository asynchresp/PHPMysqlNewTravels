<!DOCTYPE HTML> 
<html>
	<head>
    	<title>Airlines</title>
	</head>
	<body> 
    <center>
	    <div >
        <form name="airlines" action="airlines.php" method="post">
       	  <table border="0" align="center">
          		<tr>
                	<input type="submit" name="submit" value="Insert"/>
                    <br/><br/>
                </tr>
            	<tr align="center">
                	<td><label>Code</label></td>
                    <td><label>Airline Name</label></td>
                    <td><label>Country</label></td>
                </tr>
                <tr >
                	<td><input type="text" name="code" /></td>
	          	    <td><input type="text" name="airline_name" /></td>
                    <td>
                    	<select name="country">
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
        <form name="airlines" action="airlines.php" method="post">
        
            <input type="submit" name="submit" value="View"/>
        </form>
	    </div>
        
    </center>
	</body>
</html>