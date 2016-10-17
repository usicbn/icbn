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


<p class="title"> Weekend Islamic School</p>

<?php
$last_modified = filemtime("ischool.php");
?>
<font color="gray" size="1"><i>Last updated on <?=date("m/j/y h:i", $last_modified)?></i></font>
</p>
 
<a class="readmore_announcement" target=new href="documents/WeekendIslamicSchoolRegistrationForm.pdf">&nbsp;&nbsp;&nbsp;Weekend Islamic School Registration Form</a><br>
<a class="readmore_announcement" target=new href="documents/WeekendIslamicSchoolCalendar.pdf">&nbsp;&nbsp;&nbsp;Weekend Islamic School Calendar </a><br>
<br/>
<a class="readmore_announcement" target=new href="documents/SchoolHandbook.pdf">&nbsp;&nbsp;&nbsp;Weekend Islamic School Parent-Teacher Hand Book</a><br>
<a class="readmore_announcement" target=new href="documents/WaiverSchoolFacilities.pdf">&nbsp;&nbsp;&nbsp; WAIVER FOR USE OF SCHOOL FACILITIES BY INDIVIDUAL (in McLean County)</a><br>

<br/>

For ICBN Children's Summer Activities, please contact ICBN School administration.
 

<p></p>
<p class="subtitle"> School Location:</p>

<address>
Islamic Center of Bloomington-Normal<br />
Address: 2911 Gill Street, St # 6<br />
Bloomington, IL 61704</br>
(309) 664-0304</br>
</address>
<a href="mailto:us@icbn.contact@usicbn.org">Email us</a><br />

<div id="qq" class="singleRuleDivider" > </div>
<div class="clear">&nbsp;</div>
<p	>&nbsp; Google calendar for School activities may not be upto date, please see Weekend Islamic School Calendar PDF document above.</p>
<iframe src="https://www.google.com/calendar/embed?mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffcc66&amp;src=2qbfisikm4oajp01vgahfic4q0%40group.calendar.google.com&amp;color=%23711616&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%23856508&amp;ctz=America%2FChicago" style=" border:solid 1px #777 " width="600" height="600" frameborder="0" scrolling="no"></iframe>
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

<div id="footer">	
<?php include "includes/footer_body.php" ?>		
</div>

</div>
</body>
</html>
