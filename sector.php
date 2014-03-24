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
      <input type="submit" name="submit" value="View"/>
    </form>
  
</div>

</div>
<?php include("footer.php"); ?>
</body>
</html>