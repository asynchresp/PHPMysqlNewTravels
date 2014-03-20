<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin_menu</title>

<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body>
<div id="menu">
  <ul id="MenuBar2" class="MenuBarVertical">
     <li><a class="MenuBarItemSubmenu" href="#">Masters</a>
    <ul>
      <li><?php echo "<a href='sectors.php'>Sectors</a>" ?> </li>
      <li><?php echo "<a href='airlines.php'>Airlines</a>" ?> </li>
      <li><?php echo "<a href='accounts.php'>Accounts</a>" ?> </li>
      <li><?php echo "<a href='customers.php'>Customers</a>" ?> </li>
      <li><?php echo "<a href='country.php'>Country</a>" ?> </li>
      <li><?php echo "<a href='company_setup.php'>Company Setup</a>" ?> </li>
    </ul>
  </li>
  <li><a href="#" title="Ticket Sales" class="MenuBarItemSubmenu">Transactions</a>
    <ul>
     <li><?php echo "<a href='ticket_sales.php'>Ticket Sales</a>" ?> </li>
      <li><?php echo "<a href='payment_entry.php'>Payment Entry </a>" ?></li>
      <li><?php echo "<a href='ticket_refund.php'>Refund of Ticket</a>" ?> </li>
      <li><?php echo "<a href='ticket_reissue.php'>Reissue of Ticket</a>" ?> </li>
      <li><?php echo "<a href='journal_entry.php'>Journal Entry</a>" ?> </li>
      <li><?php echo "<a href='quotation.php'>Quotation</a>" ?> </li>
      <li><?php echo "<a href='exchange_offer.php'>Excahnge Offer</a>" ?> </li> 
    </ul>
  </li>
  <li><a class="MenuBarItemSubmenu" href="#">Reports</a>
    <ul>
      <li><?php echo "<a href='ticket_sales_admin.php'>Ticket Sales</a>    " ?>  </li>
      <li><?php echo "<a href='cash_bank_balance.php'>Cash/Bank Balance</a>" ?></li>
      <li><?php echo "<a href='account_wise.php'>Account Wise</a>" ?></li>
    </ul>
  </li>
  </ul>
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar_admin", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>

</html>