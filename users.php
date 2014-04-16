<?php
//code to insert into the user table
				$host="localhost"; // Host name 
				$db_username="root"; // Mysql username 
				$db_password=""; // Mysql password 
				$db_name="royal_travels"; // Database name 
				$tbl_name = "accounts";// sector table
				
				// Connect to server and select databse.
				$connection = mysql_connect("$host", "$db_username", "$db_password")or die("cannot connect"); 
				mysql_select_db("$db_name")or die("cannot select DB");
	
?>

<!DOCTYPE HTML> 
<html>
	<head>
    	<title>User</title>
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
        <form name="users" action="users.php" method="post">
       	  <table border="0" align="center">
          		<tr>
                	<input type="submit" name="insert_submit" value="Insert"/>
                </tr>
            	<tr align="center">                	
                    <td><label>User Name</label></td>
                    <td><label>Password</label></td>
                    <td><label>Branch</label></td>
                </tr>
                <tr >
                	<td><input type="text" name="username" /></td>
                    <td><input type="password" name="password" /></td>
                    <td><select name="branch" />
                    	 <?php            		
							$connection = mysql_connect("$host", "$db_username", "$db_password")or die("cannot connect"); 
							mysql_select_db("$db_name")or die("cannot select DB");
							
							$query = "SELECT branch FROM branch";
							$retval = mysql_query($query, $connection );
							while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){
								echo "<option name='{$row['branch']}'>{$row['branch']}</option>";
							}	
							mysql_close($connection);
						?>
                    </td>
	            </tr>
            
          </table>
        </form>
    	</div> 
        </br>
        </br>
        
        <div>
           	<form name="details" action="users.php" method="post">
            	<label>Select user to view details :<select name="details_dropdown"></label>
                 <?php
            		
				$connection = mysql_connect("$host", "$db_username", "$db_password")or die("cannot connect"); 
				mysql_select_db("$db_name")or die("cannot select DB");
				
				$query = "SELECT username FROM $tbl_name";
				$retval = mysql_query($query, $connection );
				while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){
					echo "<option name='{$row['username']}'>{$row['username']}</option>";
				}
				
				
				mysql_close($connection);
				?>
                </select>
                
                <input type="submit" value="Show Details" name="showDetails" />
                 <?php
				 
				 	$connection = mysql_connect("$host", "$db_username", "$db_password")or die("cannot connect"); 
				mysql_select_db("$db_name")or die("cannot select DB");
					
					if ( isset( $_POST['showDetails'])) {
											
						$user_detail_query = $_POST['details_dropdown'];
										
						$query = "SELECT id,full_name, birth_date, email, username, branch FROM accounts a, branch b WHERE a.branchid = b.bid AND a.username = '" .$user_detail_query. "'";
								
						$retval = mysql_query($query, $connection );
						if(! $retval )
						{
						  die('Could not get data: ' . mysql_error());
						}
						if($retval){
							echo "<center><table border='border'><th>ID</th><th>Full Name</th><th>DOB</th><th>Username</th><th>Email</th><th>Branch</th></tr>";
							while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
							{
								echo "<tr><td>{$row['id']}</td><td>{$row['full_name']}</td><td>{$row['birth_date']}</td><td>{$row['username']}</td><td>{$row['email']}</td><td>{$row['branch']}</td></tr>";
							} 
						}
						echo "</table></center>";
						
						mysql_close($connection);
					
					}
    			?>
                
            </form>
        </div>
        <br/>
        <br/>
        <br/>
        
        <div>
        <form name="users" action="" method="post">        
            <input type="submit" name="view_submit" value="View"/>
            <?php
            if ( isset( $_POST['view_submit'])) {
	
				$connection = mysql_connect("$host", "$db_username", "$db_password")or die("cannot connect"); 
				mysql_select_db("$db_name")or die("cannot select DB");
				$query = "SELECT email, username FROM $tbl_name";
						
				$retval = mysql_query($query, $connection );
				if(! $retval )
				{
				  die('Could not get data: ' . mysql_error());
				}
				if($retval){
					echo "<center><table border='border'><th>Username</th><th>Email</th></tr>";
					while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
					{
						echo "<tr><td>{$row['username']}</td><td>{$row['email']}</td></tr>";
					} 
				}
				echo "</table></center>";
				
				mysql_close($connection);
			}
    		?>
        </form>
	    </div>
        
    </div>

</div>
<?php //include("footer.php"); ?>

	</body>
</html>