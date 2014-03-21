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
      <li><a href="#">Sectors</a></li>
      <li><a href="#">Airlines</a></li>
      <li><a href="#">Accounts</a></li>
      <li><a href="#">Customers</a></li>
      <li><a href="#">Country</a></li>
      <li><a href="#">Company Setup</a></li>
    </ul>
  </li>
  <li><a href="#" title="Ticket Sales" class="MenuBarItemSubmenu">Transactions</a>
    <ul>
      <li><a href="#">Ticket Sales</a></li>
      <li><a href="#">Payment Entry</a></li>
      <li><a href="#">Refund of Ticket</a></li>
      <li><a href="#">Reissue of Ticket</a></li>
      <li><a href="#">Journal Entry</a></li>
      <li><a href="#">Quotation</a></li>
      <li><a href="#">Excahnge Offer</a></li>
    </ul>
  </li>
  <li><a class="MenuBarItemSubmenu" href="#">Reports</a>
    <ul>
      <li><a href="#">Ticket Sales</a>      </li>
      <li><a href="#">Cash/Bank Balance</a></li>
      <li><a href="#">Account Wise</a></li>
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