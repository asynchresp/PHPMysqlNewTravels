<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Payment Entry</title>
</head>

<body>
<div id="layout">
	<?php include("header.php"); ?>
    <div id="contents">
    	<div id="menu">
        	<?php include("user_menu.php"); ?>
        </div>
        <div id="container">
        	<center><h1>Payment Entry</h1>
				
				<!--code to display the form-->
		   <form name="payment_entry" action="payment_entry.php" method="post">
				<!--
				<input type="submit" name="submit" value="Insert"/>
				-->
				
				<table border="0" align="center" cellspacing="2" >
					
					<tr>
						<td><br/><label> admin </label> </td>
						<td><br/><label> date </label> </td>
					</tr>
					<tr><td><br/></td></tr>
					
					<tr>
						<td> <label> Date: </label> </td>
						<td><input type="text" name="date"/></td>
					</tr>
					
					<tr>
						<td> <label> Ref. No: </label> </td>
						<td><input type="text" name="ref_num"/></td>
					</tr>
					
					<tr>
						<td> <label> Amount: </label> </td>
						<td><input type="text" name="amount"/></td>
					</tr>
					
					<tr><td><br/></td></tr>
					
					<tr>
						<td> <label> Code EXN: </label> </td>
						<td><input type="text" name=""/></td>
					</tr>
					
					<tr>
								<td> <input type="radio" name="payment_type" value="cash"><label> Cash </label> </td>
								<td> <input type="radio" name="payment_type" value="check"><label> Check </label> </td>
					</tr>
					
					<tr>
						<td> <label> Cheque No.: </label> </td>
						<td><input type="text" name="cheque_num"/></td>
					</tr>
					
					<tr>
						<td> <label> Date: </label> </td>
						<td><input type="text" name="check_date"/></td>
					</tr>
					
					<tr><td><br/></td></tr>
					
					<tr>
						<td> <label> Account(Dr.): </label> </td>
						<td><input type="text" name="account"/></td>
					</tr>
					<tr>
						<td> <label> Cash/Bank(Cr.): </label> </td>
						<td><input type="text" name="cash/bank"/></td>
					</tr>
					<tr>
						<td> <label> Remarks: </label> </td>
						<td> <textarea name="remarks"> </textarea> </td>
					</tr>
					
					<tr><td><br/></td></tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="submit" value="Print voucher">
						</td>
					</tr>
					
					<tr><td><br/></td></tr>
					
				</table>	
			</center>
	   </div>
	   
	   </div>
	   <?php include("footer.php"); ?>
	   </div>
</body>
</html>