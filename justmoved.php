


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Welcome to Islamic Center of Bloomington Normal, IL</title>
<link rel="stylesheet" href="styles/main.css" type="text/css">
<link rel="stylesheet" href="styles/nav.css" type="text/css">
<link rel="stylesheet" href="styles/custom.css" type="text/css">

			<SCRIPT TYPE="text/javascript" src="script/vscript.js"></SCRIPT>

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


<p class="title">Join Bloomington-Normal Community</p>


<?php
$lName = "";
$fName = "";

  $email = $_REQUEST['email'] ;
  $subject = $_REQUEST['Fname'] ;
  $fName = $_REQUEST['Fname'] ;
  $lName = $_REQUEST['Lname'] ;
  $AgreeFlag = $_REQUEST['AgreeFlag'] ;
  $ISI = $_REQUEST['ISI'] ;
  $Social = $_REQUEST['Social'] ;
  $Youth = $_REQUEST['Youth'] ;
  $Library = $_REQUEST['Library'] ;
  $Refugee = $_REQUEST['Refugee'] ;
  $Dawah = $_REQUEST['Dawah'] ;
  $Funeral = $_REQUEST['Funeral'] ;
  $Sports = $_REQUEST['Sports']; 
  
    require_once('recaptchalib.php');
  $privatekey = "6LeUMvoSAAAAACU47nHuzZgMV8fC6HTqg1Y6z7H5";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);
                                
if ($resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly

   //if "email" is filled out, send email
  
  $message = "<h2>$lName, $fName </h2>wants to join the community with email address as $email <br><br>".
  "<b>First Name:</b> $fName<br>".
  "<b>Last Name:</b> $lName<br>".
  "<b>Address:</b> $Addr, $City, $State, $Zip<br>".
  "<b>Telephone:</b> $Phone<br>".
  "<b>Email:</b> $email<br>".
  "<b>Occupation:</b>$Occ<br>".
  "<b>How long:</b>$Duration<br>".
  "<b>Interested in:</b> Islamic School: $ISI  Social:$Social  Sports:$Sports  Youth:$Youth  Library:$Library Refugee:$Refugee  Dawah:$Dawah  Funeral:$Funeral<br>".
  "<b>Agree:</b> $AgreeFlag" ;


mail('icbn.comm@gmail.com', "New Member: $lName, $fName",
    "<html><body><p>$message</p></body></html>",
    "From: The Sender <$email>\n" .
    "MIME-Version: 1.0\n" .
    "Content-type: text/html; charset=iso-8859-1");

?>

<p><b>Dear Brother/Sister, <?=$fName?> <?=$lName?></b><br><br>

Thank you for your time to fill the form.<br>
We're very happy to have you in this community. We'll keep you updated about the happenings in the community.<br><br>

JazakAllahu Khairan,<br>
<b>Islamic Center of Bloomington-Normal</b><br></p>

<?}else {?>





						<form name="frmreg" method="post" action="justmoved.php" ID="Form1">

							<table border="0" cellpadding="1" cellspacing="0" width="100%" ID="Table3">
								<tr bgcolor="#9aad9d">
									<td colspan="2">
										<font class="heading2w">Community Updates Information Form (This is not a membership form).</B></font>
									</td>

								</tr>
								<tr>
									<td colspan="2">
										<font class="NewsLink"><p>Please add yourself to the Islamic Center of Bloomington-Normal (ICBN)
											Muslim community. The purpose of having your details is to keep you informed
											about the happenings in the community through email or snail mail and to share
											the concerns of fellow muslim brothers and sisters.<hr size=1></p> </font>

										<P style="COLOR: darkred" align="left">
											<font class="Custom1"><font color="#ff0000">* </font>Indicates required fields </B></font>
											<br>
    <? if(isset($email)){?>
        <p style="color:red;margin-left:20px;font-weight:bold">The reCAPTCHA code you entered was incorrect, please try again !</p>
    <?}?>
											<br>
										</P>
									</td>
								</tr>
								<tr>
									<br>
									<td width="50%" class="Heading1">
										First Name<font color="#ff0000"><b>*</b></font>

										<br>
										<input maxlength="30" name="Fname" ID="Fname" size="20">
									</td>
									<!-- Coloum two in the second table row -->
									<td width="50%" colspan="2">
										<font class="Heading1">Last Name</font><font color="#ff0000"><b>*</b></font>
										<br>
										<input maxlength="30" name="Lname" ID="Lname" size="20">

									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size=1>
									</td>
								</tr>
								<tr>
									<td width="50%">

										<font class="Heading1">Address:</font>
										<br>
										<input name="Addr" ID="Addr" size="30">
									</td>
									<td width="50%">
										<font class="Heading1">City:</font>
										<br>
										<input name="City" ID="City" value="Bloomington" size="20">

									</td>
								</tr>
								<tr>
									<td width="50%">
										<font class="Heading1">State:</font>
										<br>
										<input name="State" ID="State" value="IL">
									</td>

									<td width="50%">
										<font class="Heading1">Zip:</font>
										<br>
										<input name="Zip" ID="Zip" size="10" maxlength="5">
									</td>
								</tr>
								<tr>
									<td width="50%">

										<font class="Heading1">Email: (someone@somewhere.com)</font><font color="#ff0000"><b>*</b></font>
										<br>
										<input name="email" ID="Email" size="40">
									</td>
									<td width="50%">
										<font class="Heading1">Phone:</font>
										<br>

										<input name="Phone" ID="Phone">
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr size=1>
									</td>
								</tr>
								<tr>

									<td align="left">
										<font class="Heading1">Occupation</font><font color="#ff0000" size="3"><b>*</b></font>
									</td>
									<td>
										<select name="Occ" id="Occ">
											<option value="" selected>
												&nbsp;</option>
											<option value="Advertising/Marketing">

												Advertising/Marketing</option>
											<option value="Automotive">
												Automotive</option>
											<option value="Businessman">
												Businessman</option>
											<option value="Cab">
												Cab Services</option>

											<option value="CEO/CTO/CIO">
												CEO/CTO/CIO</option>
											<option value="Computers/IT">
												Computers/IT</option>
											<option value="Construction">
												Construction</option>
											<option value="Engineer">

												Engineer</option>
											<option value="Executive">
												Executive</option>
											<option value="Legal">
												Legal Services</option>
											<option value="Manager">
												Manager</option>

											<option value="Media">
												Media</option>
											<option value="Physician">
												Physician</option>
											<option value="">
												Student</option>
											<option value="Teacher">

												Teacher</option>
											<option value="Others">
												Others</option>
										</select>
									</td>
								</tr>
								<tr>
									<td align="left">

										<font class="Heading1">How long have you been in Bloomington-Normal?</font>
									</td>
									<td>
										<select ID="Duration" NAME="Duration">
											<option>
												Just Moved</option>
											<option>
												1 Year or Less</option>

											<option>
												2 - 5 Years</option>
											<option>
												5 - 10 Years</option>
											<option>
												10 - 15 Years</option>
											<option>

												15 - 20 Years</option>
											<option>
												20 - More</option>
										</select>
									</td>
								</tr>
								<tr>
									<td colspan="2">

										<hr size=1>
									</td>
								</tr>
								<tr>
									<td align="left" COLSPAN="2">
										<font class="Heading1"><b>I am interested in following activities:</b></font>
									</td>
								</tr>

								<tr valign="top">
									<td align="left" COLSPAN="2" class="heading1">
										<input type="checkbox" name="ISI" id="ISI">Islamic School&nbsp;&nbsp; <input type="checkbox" name="Youth" id="Youth">Youth&nbsp;&nbsp;
										<input type="checkbox" name="Sports" id="Sports">Sports&nbsp;&nbsp; <input type="checkbox" name="Dawah" id="Dawah">Dawah&nbsp;
										<input type="checkbox" name="Social" id="Social">Social Services&nbsp;<input type="checkbox" name="Refugee" id="Refugee">Refugee
										Program&nbsp;<input type="checkbox" name="Library" id="Library">Library&nbsp;&nbsp;

										<input type="checkbox" name="Funeral" id="Funeral">Funeral Services
									</td>
								</tr>
								<tr>
									<td colspan="2">
										&nbsp;
									</td>
								</tr>
								<tr>

									<td align="left" COLSPAN="2">
										<input type="checkbox" name="AgreeFlag" ID="NewsFlag" checked value="YES">&nbsp; <font class="NewsLink">
											I Agree, that the above information provided is correct and i wish to receive community events/updates.</font>
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
<?}?>

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
