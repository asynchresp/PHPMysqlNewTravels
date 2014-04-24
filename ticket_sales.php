<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div id="layout">
	<?php include("header.php"); ?>
    <div id="contents">
    	<div id="menu">
        	<?php include("user_menu.php"); ?>
        </div>
        <div id="container">
        	<center>
			<h1>Ticket Sales</h1>
			
			<!--code to display the form-->
		   <form name="ticket_sales" action="ticket_sales.php" method="post">
				<input type="submit" name="submit" value="Insert"/>
								
				<table border="0" align="center" cellspacing="2" >
					<tr >
						<td align="center">
						
							<br/>
							<table border="0" cellspacing="2" >
								<tr>
									<td colspan="2" ><label> admin </label> </td>
									<td colspan="3"><label> date </label> </td>
								</tr>
								
								<tr>
									<td> <label> Date: </label> </td>
									<td ><input type="text" name="date"/></td>
									
									<td> <label> TXN num: </label> </td>
									<td><input type="text" name="txn_num"/></td>
								</tr>
								
								<tr>
									<td></td>
									<td>
										<input type="checkbox" name="change_date" value="change_date"/> 
										<label> Change date </label>
									</td>
									
									
									<td> <label> Enter New date: </label> </td>
									<td> <input type="text" name="new_date"/> </td>
								</tr>
								
								<tr>
									<td> <label> Sold to: </label> </td>
									<td colspan="4">
										<select width="200px" name="sold_to">
											  <option value="value1">Value1</option>
											  <option value="value2">Value2</option>
											  <option value="value3">Value3</option>
										</select>
									</td>
								</tr>
								
								<tr>
									<td> <label> Purchase form: </label> </td>
									<td colspan="4">
										<select width="200px" name="purchase_form">
											  <option value="value1">Value1</option>
											  <option value="value2">Value2</option>
											  <option value="value3">Value3</option>
										</select>
									</td>
								</tr>
								
								<tr>
									<td> <label> Travle Date: </label> </td>
									<td> <input type="text" name="travel_date"/> </td>
													
									<td></td>
									
									<td colspan="2">
										<input type="checkbox" name="ticket_refundable" value="ticket_refundable"/>
										<label> Ticket Refundable </label>
									</td>
								</tr>
								
								<tr>
									<td> <label> Return Date: </label> </td>
									<td> <input type="text" name="return_date"/> </td>
													
									<td></td>
									
									<td colspan="2">
										<input type="checkbox" name="date_change_allowed" value="date_change_allowed"/>
										<label> Date Change Allowed </label>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					
					<tr>
						<td colspan="3" align="center">
							<br/><input type="button" name="search_passenger" value="Search Passenger"/>
						</td>	
					</tr>
					
					<tr>
						<td align="center">
						
							<br/>
							<table border="0">
							<caption> <u>Payment Details</u> </caption>
							
							<tr>
								<td> <input type="radio" name="payment_type" value="cash"><label> Cash </label> </td>
								<td> <input type="radio" name="payment_type" value="check"><label> Check </label> </td>
								<td> <input type="radio" name="payment_type" value="credit"><label> Credit </label> </td>
							</tr>
							
							<tr>
								<td> <label> Check No and Date </label> </td>
								<td> <input type="text" name="check_num"/> </td>
								<td> <input type="text" name="check_date"/> </td>
							</tr>
							
							<tr>
								<td> <label> Drawn Bank </label> </td>
								<td> <input type="text" name="draw_bank"/> </td>
							</tr>
							
							</table>
							
							
						</td>
					</tr>
						
					<tr>
						<td align="center">
						<br/>
							<div style="border-style:solid;border-width:2px; ">
								<div style="width:850px;height:150px;overflow:scroll;">
									<table border="0" >
										<tr>
											<td align="center" > <label> Name </label> </td>
											<td align="center" > <label> Sector </label> </td>
											<td align="center" > <label> S/R </label> </td>
											<td align="center" > <label> Airline </label> </td>
											<td align="center" > <label> Class </label> </td>
											
											<td align="center" > <label> A </label> </td>
											<td align="center" > <label> Ticket/PNR </label> </td>
											<td align="center" > <label> Base Fare </label> </td>
											<td align="center" > <label> SurChg </label> </td>
											<td align="center" > <label> SVC Tax </label> </td>
											<td align="center" > <label> Ticket Cost </label> </td>
											<td align="center" > <label> Sold Amount </label> </td>
										</tr>
											
										<tr>
											<td> <input type="text" name="name" size="4"/> </td>
											<td> <input type="text" name="sector" size="4"/> </td>
											<td>
												<select width="200px" name="s/r">
												  <option value="value1">Value1</option>
												  <option value="value2">Value2</option>
												  <option value="value3">Value3</option>
												</select>
											</td>
											<td>
												<select width="200px" name="airline">
												  <option value="value1">Value1</option>
												  <option value="value2">Value2</option>
												  <option value="value3">Value3</option>
												</select>
											</td>
											<td>
												<select width="200px" name="class">
												  <option value="value1">Value1</option>
												  <option value="value2">Value2</option>
												  <option value="value3">Value3</option>
												</select>
											</td>
											
											<td> <input type="text" name="a" size="4"//> </td>
											<td> <input type="text" name="ticket/pnr" size="4"//> </td>
											<td> <input type="text" name="base_fare" size="4"//> </td>
											<td> <input type="text" name="surchg" size="4"//> </td>
											<td> <input type="text" name="svc_tax" size="4"//> </td>
											<td> <input type="text" name="ticket_cost" size="4"//> </td>
											<td> <input type="text" name="sold_amount" size="4"//> </td>									
										</tr>		
										
										<tr>
											<td> <input type="text" name="name" size="4"/> </td>
											<td> <input type="text" name="sector" size="4"/> </td>
											<td>
												<select width="200px" name="s/r">
												  <option value="value1">Value1</option>
												  <option value="value2">Value2</option>
												  <option value="value3">Value3</option>
												</select>
											</td>
											<td>
												<select width="200px" name="airline">
												  <option value="value1">Value1</option>
												  <option value="value2">Value2</option>
												  <option value="value3">Value3</option>
												</select>
											</td>
											<td>
												<select width="200px" name="class">
												  <option value="value1">Value1</option>
												  <option value="value2">Value2</option>
												  <option value="value3">Value3</option>
												</select>
											</td>
											
											<td> <input type="text" name="a" size="4"//> </td>
											<td> <input type="text" name="ticket/pnr" size="4"//> </td>
											<td> <input type="text" name="base_fare" size="4"//> </td>
											<td> <input type="text" name="surchg" size="4"//> </td>
											<td> <input type="text" name="svc_tax" size="4"//> </td>
											<td> <input type="text" name="ticket_cost" size="4"//> </td>
											<td> <input type="text" name="sold_amount" size="4"//> </td>
										</tr>
				
										<tr>
											<td> <input type="text" name="name" size="4"/> </td>
											<td> <input type="text" name="sector" size="4"/> </td>
											<td>
												<select width="200px" name="s/r">
												  <option value="value1">Value1</option>
												  <option value="value2">Value2</option>
												  <option value="value3">Value3</option>
												</select>
											</td>
											<td>
												<select width="200px" name="airline">
												  <option value="value1">Value1</option>
												  <option value="value2">Value2</option>
												  <option value="value3">Value3</option>
												</select>
											</td>
											<td>
												<select width="200px" name="class">
												  <option value="value1">Value1</option>
												  <option value="value2">Value2</option>
												  <option value="value3">Value3</option>
												</select>
											</td>
											
											<td> <input type="text" name="a" size="4"//> </td>
											<td> <input type="text" name="ticket/pnr" size="4"//> </td>
											<td> <input type="text" name="base_fare" size="4"//> </td>
											<td> <input type="text" name="surchg" size="4"//> </td>
											<td> <input type="text" name="svc_tax" size="4"//> </td>
											<td> <input type="text" name="ticket_cost" size="4"//> </td>
											<td> <input type="text" name="sold_amount" size="4"//> </td>
										</tr>
										
										<tr>
											<td> <input type="text" name="name" size="4"/> </td>
											<td> <input type="text" name="sector" size="4"/> </td>
											<td>
												<select width="200px" name="s/r">
												  <option value="value1">Value1</option>
												  <option value="value2">Value2</option>
												  <option value="value3">Value3</option>
												</select>
											</td>
											<td>
												<select width="200px" name="airline">
												  <option value="value1">Value1</option>
												  <option value="value2">Value2</option>
												  <option value="value3">Value3</option>
												</select>
											</td>
											<td>
												<select width="200px" name="class">
												  <option value="value1">Value1</option>
												  <option value="value2">Value2</option>
												  <option value="value3">Value3</option>
												</select>
											</td>
											
											<td> <input type="text" name="a" size="4"//> </td>
											<td> <input type="text" name="ticket/pnr" size="4"//> </td>
											<td> <input type="text" name="base_fare" size="4"//> </td>
											<td> <input type="text" name="surchg" size="4"//> </td>
											<td> <input type="text" name="svc_tax" size="4"//> </td>
											<td> <input type="text" name="ticket_cost" size="4"//> </td>
											<td> <input type="text" name="sold_amount" size="4"//> </td>
										</tr>
											
									</table>
								</div>
								
								<table border="0" align="right" style="padding-right:25px;">
									
									<tr>
										<td align="right"> <label> Total: </label> </td>
										<td> <input type="text" name="" size="4"//> </td>
										<td> <input type="text" name="" size="4"//> </td>
										<td> <input type="text" name="" size="4"//> </td>
										<td> <input type="text" name="" size="4"//> </td>
										<td> <input type="text" name="" size="4"//> </td>
									</tr>
								</table>
								
							</div>
						</td>
					</tr>
				
				</table>
		   
		   </form>
		   </br>
		   
		   </center>
	   </div>
		   
	   </div>
	   <?php include("footer.php"); ?>
	   </div>
</body>
</html>