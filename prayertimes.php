<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Welcome to Islamic Center of Bloomington Normal, IL</title>
<link rel="stylesheet" href="styles/main.css" type="text/css">
<link rel="stylesheet" href="styles/nav.css" type="text/css">
<link rel="stylesheet" href="styles/custom.css" type="text/css">

</head>
<body class="body-style">
<?php include "includes/script_include.php" ?>
<div id="maincontainer" class="<?=$shadow_class?>">

<!--
<div id="topsection">
	<div class="innertube">
		<h1>CSS Fixed Layout #3.1- (Fixed-Fixed-Fixed)</h1>
	</div>
</div>
-->

 <div id="header">
   <div class="bgleft">
      <div class="bgright">
         <div class="bgbl"></div>
      </div>
   </div>
 </div>
	

 <?php include "includes/menu_include.php" ?>
 
<div id="contentwrapper">
<div id="contentcolumn">

<!-- Do not delete above  this line-->
<?php
if( ! ini_get('date.timezone') )
{
    date_default_timezone_set('GMT');
}

$thismonth = date("m");
$thisyear = date("y");
?>
<small>

<a href="documents/Schedule<?=$thismonth?><?=$thisyear?>.pdf" style="color:#0000FF;text-align:left">Open in new window</a></small>


<br/>


<iframe width="100%" height="900" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="documents/Schedule<?=$thismonth?><?=$thisyear?>.pdf"></iframe>



<br /><small>
<a href="" style="color:#0000FF;text-align:left">Open in new window</a></small>

<!-- Do not delete below this line-->
</div>
</div>

<div id="leftcolumn">
<div class="innertube">

</div>

</div>

<div id="rightcolumn">
<div class="righttube">
<?php include "includes/rightnav_body.php" ?>
</div>
</div>

<div id="footer"><a href="http://www.dynamicdrive.com/style/">Dynamic Drive CSS Library</a></div>

</div>
</body>
</html>
