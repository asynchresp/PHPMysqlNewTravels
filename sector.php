<?php 

session_start();

if( isset( $_POST['submit']) )
{
	//code to insert into the sector table
	
	$host="localhost"; // Host name 
	$db_username="root"; // Mysql username 
	$db_password=""; // Mysql password 
	$db_name="royal_travels"; // Database name 
	$tbl_name = "sector_master";// sector table
	
	// Connect to server and select databse.
	mysql_connect("$host", "$db_username", "$db_password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");

	$code = $_POST['code'];
	$sec1 = $_POST['sec1'];
	$sec2 = $_POST['sec2'];
	$sec3 = $_POST['sec3'];
	$sec4 = $_POST['sec4'];
	$sec5 = $_POST['sec5'];
	echo $code.$sec1.$sec2.$sec3.$sec4.$sec5;
	
	//working here
	$sql="INSERT INTO $tbl_name(code,sec1,sec2,sec3,sec4,sec5) VALUES ('$code','$sec1','$sec2','$sec3','$sec4','$sec5')";
	$result=mysql_query($sql);
	
	//if the result is null, then there has been an error in insertion
	if( !$result )
	{
		echo "Error in insertion to sector table.";
	}
}
else if( isset( $_POST['display']) )
{
		//code to display from the sector table
		
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Sector</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="layout">
<?php include("header.php"); ?>
<div id="contents">
<div id="menu">
<?php include("admin_menu.php"); ?>
</div>
 <div id="container">
    <form name="sector" action="sector.php" method="post">
      <table border="border" align="center">
        <tr>
          <input type="submit" name="submit" value="Insert"/>
          <br/>
          <br/>
        </tr>
        <tr align="center">
          <td><label>Code</label></td>
          <td><label>Sec1</label></td>
          <td><label>Sec2</label></td>
          <td><label>Sec3</label></td>
          <td><label>Sec4</label></td>
          <td><label>Sec5</label></td>
        </tr>
        <tr >
          <td><input type="text" name="code" size="15" /></td>
          <td><input type="text" name="sec1" size="15" /></td>
          <td><input type="text" name="sec2" size="15" /></td>
          <td><input type="text" name="sec3" size="15" /></td>
          <td><input type="text" name="sec4" size="15" /></td>
          <td><input type="text" name="sec5" size="15" /></td>
        </tr>
      </table>
    </form>
  
  
   <form name="sectors" action="sector.php" method="post">
      <input type="submit" name="display" value="View"/>
    </form>
  
</div>

</div>
<?php include("footer.php"); ?>
</body>
</html>