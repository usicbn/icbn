<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Welcome to Islamic Center of Bloomington Normal, IL</title>
<link rel="stylesheet" href="styles/main.css" type="text/css">
<link rel="stylesheet" href="styles/nav.css" type="text/css">
<link rel="stylesheet" href="styles/custom.css" type="text/css">

<script src="script/vscript.js" type="text/javascript" ></script>

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


<p class="title">FeedBack</p>

<!--<hr noshade color="#000000" size="1" width='50%'>-->

    <p dir="ltr">

<b>Mailing Address:</b><br>

2911 Gill St, Suite 6.<br>
Bloomington, IL 61704<br>

&nbsp;</p>

    <p dir="ltr">

<b>Telephone</b>: (309) 664-0304<p>
<!--
<b>Non-Muslim inquires:</b><br>

<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b>
<a class="nav" href="/services/mosqueVisit.php">Request a visit to the mosque</a><br>

<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b>
<a class="nav" href="/services/requestMaterial.php">Request free Islamic
material</a><br>

<br>
-->

    <p>
Please use the following form and send us your valuable feedback regarding the ICBN website.
    </p>
    
<?php
  $email = $_REQUEST['email'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;
  
  require_once('recaptchalib.php');
  $privatekey = "6LeUMvoSAAAAACU47nHuzZgMV8fC6HTqg1Y6z7H5";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly

    if(isset($email)){?>
        <p style="color:red;margin-left:20px;font-weight:bold">The reCAPTCHA code you entered was incorrect, please try again !</p>
    <?}?>
    
		<table class='emailbox' border='0' cellpadding='0' cellspacing='0' style='border-collapse: collapse' >
		<tr><td>
		<form method="post" action="ifdbk.php" name="frmct" id="form1">
		<fieldset style='text-align:left; width=50%;' border>
		<legend><b>Online Feedback Form</b></legend>
		<table>
		<tr><td colspan=2><font class="Custom1"><font color="#ff0000">* </font>Indicates required fields </B></font></td></tr>
		<tr><td class='emaillabel'>Email<font color="#ff0000"><b>*</b></font></td><td><input name="email" type="text" value="<?=$email?>" /></td></tr>
		<tr><td class='emaillabel'>Subject<font color="#ff0000"><b>*</b></font></td><td><input name='subject' type='text' value="<?=$subject?>"/></td></tr>

		<tr><td class='emaillabel' align='left' valign='top'>Message<font color="#ff0000"><b>*</b></font></td><td> <textarea name='message' rows='15' cols='60'> <?=$message?></textarea></td></tr>
		<tr><td align=center colspan=2>
			<?php
			  require_once('recaptchalib.php');
			  $publickey = "6LeUMvoSAAAAAGCvHD-Mf0AaXkK5CoQ-WKckJFn5"; // you got this from the signup page
			  echo recaptcha_get_html($publickey);
			?>
		</td></tr>
		
		<tr><td align=center colspan=2> 
		<input type="submit" value="Send" onClick="return checkContactForm(frmct)" id="submit1" />
		<input type="reset" value="Clear" name="btnClear" ID="Reset1">
		</td></tr>
		</table>

		</fieldset>
		  </form>
		  </td>
		 </tr>
		</table>
		
    <?php 
    }else{
    
    		//if "email" is filled out, send email

		  //send email

		  // To send HTML mail, the Content-type header must be set
		  $headers  = 'MIME-Version: 1.0' . "\r\n";
		  //$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		  // Additional headers
		  $headers .= "From: $email" . "\r\n";
		  //$headers .= 'Cc: icbn.contact@usicbn.org' . "\r\n";
		 // $headers .= 'Bcc: hello@hello.com' . "\r\n";

		  mail( "tech@usicbn.org", "[ICBN:Feedback]: $subject",
		  $message, $headers );
		  echo "Thank you for using our mail form";
    
    } ?>  


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



