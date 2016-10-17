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

<p class="title">Ask Imam</p>


<?php
$lName = "";
$fName = "";
		  $email = $_REQUEST['email'] ;
		  $phone = $_REQUEST['Phone'] ;
		  $question = $_REQUEST['Question'] ;
		  $fName = $_REQUEST['Fname'] ;
		  
  require_once('recaptchalib.php');
  $privatekey = "6LeUMvoSAAAAACU47nHuzZgMV8fC6HTqg1Y6z7H5";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);
if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    
?>
         
			<form name="frmreg" method="post" action="gotaquestion.php" ID="Form1">

							<table border="0" cellpadding="1" cellspacing="0" width="100%" ID="Table3">
								<tr bgcolor="#9aad9d">
									<td colspan="2">
										<font class="heading2w">Ask ICBN Imam</font>
									</td>

								</tr>
								<tr>
									<td colspan="2">
										<font class="NewsLink"><p>Please fill out following information to submit the question. Please make sure that you submit correct name and email id of yours as the answer to your question will be emailed to the id you submit your question with.<br><br>
											Also, answers to your question might get delayed due to large number of emails we receive. Ima=8o9o,i will answer the questions in the order they are received.<br><br>

									<hr size=1></p> </font>

							<P style="COLOR: darkred" align="left">
											<font class="Custom1"><font color="#ff0000">* </font>Indicates required fields </B></font>
											<br>

    <?php
    if(isset($fName)){?>
        <p style="color:red;margin-left:20px;font-weight:bold">The reCAPTCHA code you entered was incorrect, please try again !</p>
    <?}?>
											<br>
							</P>
									</td>
								</tr>
								<tr>
									<br>
									<td width="50%" class="Heading1" colspan="2">
										Full Name<font color="#ff0000"><b>*</b></font>

										<br>
										<input maxlength="100" name="Fname" ID="Fname" value="<?=$fName?>" size="40">
									</td>
								</tr>
								<tr>
									<td width="50%">

										<font class="Heading1">Email: (someone@somewhere.com)</font><font color="#ff0000"><b>*</b></font>
										<br>
										<input name="email" ID="Email" value="<?=$email?>" size="40">
									</td>
									<td width="50%">
										<font class="Heading1">Phone:</font>
										<br>

										<input name="Phone" ID="Phone" value="<?=$phone?>">
									</td>
								</tr>

								<tr>

									<td align="left" COLSPAN="2">
										<font class="Heading1">Please type your question here (250 char max):</font>
										<br>
										<textArea name="Question" ID="question"  rows="20" cols="70"> <?=$question?></textArea>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<?php
										  require_once('recaptchalib.php');
										  $publickey = "6LeUMvoSAAAAAGCvHD-Mf0AaXkK5CoQ-WKckJFn5"; // you got this from the signup page
										  echo recaptcha_get_html($publickey);
										?>
										<hr size=1>

									</td>
								</tr>
								<tr>
									<td align="left">
										&nbsp;
									</td>
									<td align="left">
										<input type="submit" value="Submit" name="btnAdd" onClick="return check(frmreg)" ID="Submit1">
										<input type="reset" value="Clear" name="btnClear" ID="Reset1">

									</td>
								</tr>
							</table>
							
					</form>         
         
         
 <? } else {
  // Your code here to handle a successful verification

if (isset($_REQUEST['email'])){
		   //if "email" is filled out, send email
		  
		  //send email
		  //http://www.sitepoint.com/article/advanced-email-php/3


		  $message = "Question posted by $fName <br><br>".
					"<b>Telephone:</b> $phone<br>".
					"<b>Email:</b> $email<br>".
					"<hr/><br><b>Question:</b> <pre>$question</pre><br>".

		  // To send HTML mail, the Content-type header must be set
		  $headers  = "MIME-Version: 1.0" . "\r\n";
		  //$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";

		  // Additional headers
		  $headers .= "From: $email" . "\r\n";
		  //$headers .= 'Cc: icbn.comm@gmail.com' . "\r\n";
		 // $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

		  mail( "-@gmail.com", "[AskImam]: Question from $fName",
		   "<html><body><p>$message</p></body></html>", 
			   "From: The Sender <$email>\n" .
			"MIME-Version: 1.0\n" .
			"Content-type: text/html; charset=iso-8859-1");
?>
			<p><b>Dear <?=$fName?></b><br><br>

			Thank you for submitting your question.<br> Inshallah you will be contacted/answered by email soon.<br><br>

			JazakAllahu Khairan,<br>
			<b>Imam @ Islamic Center of Bloomington-Normal</b><br></p>
  <?}
  
  }?>





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
