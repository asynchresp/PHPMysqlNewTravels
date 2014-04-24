<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reissue of Ticket</title>
</head>

<body>
<div id="layout">
	<?php include("header.php"); ?>
    <div id="contents">
    	<div id="menu">
        	<?php include("user_menu.php"); ?>
        </div>
        <div id="container">
        	<center><h1>Reissue of Ticket</h1>
				
				<!--code to display the form-->
		    <form name="ticket_reissue" action="ticket_reissue.php" method="post">
				
				<!--
				<input type="submit" name="submit" value="Insert"/>
				-->
				
				<table border="0" align="center" cellspacing="2" >
					
					<tr>
						<td><label> admin </label> </td>
						<td><label> date </label> </td>
					</tr>
					<tr><td><br/></td></tr>
					
					<tr>
						<td> <label> Date: </label> </td>
						<td><input type="text" name="date"/></td>
					</tr>
					
					<tr>
						<td> <label> Code RFN: </label> </td>
						<td><input type="text" name="code_rfn"/></td>
					</tr>
					
					<tr>
						<td> <label> Ref No: </label> </td>
						<td><input type="text" name="ref_num"/></td>
					</tr>
					
					<tr>
						<td> <label> Passenger Name: </label> </td>
						<td><input type="text" name="passenger_name"/></td>
					</tr>
					
					<tr>
						<td> <label> Ticket/PNR # </label> </td>
						<td><input type="text" name="ticket/pnr"/></td>
					</tr>
					
					<tr>
						<td> <label> Ticket Cost: </label> </td>
						<td><input type="text" name="ticket_cost"/></td>
					</tr>
					
					<tr>
						<td> <label> Sold Amount: </label> </td>
						<td><input type="text" name="sold_amount"/></td>
					</tr>
					
					<!---->
					<tr><td><br/></td></tr>
					<tr>
						<td> <label> No Show Charge </label> </td>
						<td><input type="text" name="no_show_charge"/></td>
					</tr>
					<tr>
						<td> <label> SVC Charge </label> </td>
						<td><input type="text" name="no_show_svc_charge"/></td>
					</tr>
					
					<!---->
					<tr><td><br/></td></tr>
					<tr>
						<td> <label> Reissue Charge: </label> </td>
						<td><input type="text" name="reissue_charge"/></td>
					</tr>
					<tr>
						<td> <label> SVC Charge: </label> </td>
						<td><input type="text" name="reissue_svc_charge"/></td>
					</tr>
					
					<tr><td><br/></td></tr>
					<tr>
						<td> <label> Receive Amount: </label> </td>
						<td><input type="text" name="receive_amount"/></td>
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
			</form>
			
			</center>
        </div>
    </div>
    <?php include("footer.php"); ?>
</div>
</body>
</html>