
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

<div id="contentwrapper">
<div id="contentcolumn">

<p class="title"> My SQL Code</p>

<?php
//Sample Database Connection Syntax for PHP and MySQL.

//Connect To Database

$hostname="97.74.31.140";
$username="icbnrental";
$password="Test@123";
$dbname="icbnrental";
$usertable="icbnrentalform";
$yourfield = "name";

$con = mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
mysql_select_db($dbname);

# Check If Record Exists

$query = "SELECT * FROM $usertable";

$result = mysql_query($query);

if($result)
{
  while($row = mysql_fetch_array($result))
  {
    $name = $row["$yourfield"];
    echo "Name: ".$name."<br>";
  }
}
mysql_close($con);
?>


<!-- do not delete after this.. -->
</div>
</div>

<div id="leftcolumn">
<div class="innertube">
<?php include "includes/leftnav_body.php" ?>

</div>

</div>

<div id="rightcolumn">
<div class="righttube">

</div>
</div>

<div id="footer">	
<?php include "includes/footer_body.php" ?>		
</div>

</div>
</body>
</html>
