<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
</head>

<body>
<ul id="MenuBar1" class="MenuBarVertical">
      <li><?php echo "<a href='ticket_sales.php'>Ticket Sales</a>" ?> </li>
      <li><?php echo "<a href='payment_entry.php'>Payment Entry </a>" ?></li>
      <li><?php echo "<a href='ticket_refund.php'>Refund of Ticket</a>" ?> </li>
      <li><?php echo "<a href='ticket_reissue.php'>Reissue of Ticket</a>" ?> </li>
      <li><?php echo "<a href='journal_entry.php'>Journal Entry</a>" ?> </li>
      <li><?php echo "<a href='quotation.php'>Quotation</a>" ?> </li>
      <li><?php echo "<a href='exchange_offer.php'>Excahnge Offer</a>" ?> </li> 
</ul>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>