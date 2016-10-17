


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Welcome to Islamic Center of Bloomington Normal, IL</title>
<link rel="stylesheet" href="styles/main.css" type="text/css">
<link rel="stylesheet" href="styles/nav.css" type="text/css">
<link rel="stylesheet" href="styles/custom.css" type="text/css">

			<SCRIPT TYPE="text/javascript" SRC="script/fscript.js"></SCRIPT>

			<SCRIPT LANGUAGE="JavaScript">
				<!--

				function Check(frmname){

					if (!checkname(frmname.Fname, "First Name"))
						return false;

					if (!checkname(frmname.Lname, "Last Name"))
						return false;

					if (!checkemail(frmname.Email, "Email"))
						return false;

					if (!checkOcc(frmname.Occ, "Occupation"))
						return false;
						
					if (frmname.AgreeFlag.checked == false){
					    alert('Please agree that the above information is valid and correct.');
						return false;
					}

					return true;
				}

				function checkname(formField, fieldLabel){
					var result = true;

					if (!validRequired(formField,fieldLabel))
						result = false;

 					if (result)
 					{
						var strname = formField.value;

						if (!isName(strname))
 						{
 							alert('Make a valid entry for the "' + fieldLabel +'" field.');
 							formField.focus();
							result = false;
						}
					}

					return result;
				}



				function validRequired(formField,fieldLabel)
				{
					var result = true;
					var strvalue = formField.value
					if (strvalue.length == 0)
					{
						alert('Please enter a value for the "' + fieldLabel +'" field.');
						formField.focus();
						result = false;
					}

					return result;
				}



				function isName(strname){
					var i;
					for (i = 0; i < strname.length; i++)
					{
						// Check that current character is letter.
						var c = strname.charAt(i);

						if (!isLetter(c)) return false;
					}

					return true;
				}


			function isLetter (c)
				{   return ( ((c >= "a") && (c <= "z")) || ((c >= "A") && (c <= "Z")) )
				}



				function isEmailAddr(email)
				{
				var result = false;
				var theStr = new String(email);
				var index = theStr.indexOf("@");
				if (index > 0)
				{
					var pindex = theStr.indexOf(".",index);
					if ((pindex > index+1) && (theStr.length > pindex+1))
					result = true;
				}
				return result;
				}


				function checkemail(formField,fieldLabel)
				{
					var result = true;

					if (!validRequired(formField,fieldLabel))
						result = false;

					if (result && ((formField.value.length < 3) || !isEmailAddr(formField.value)) )
					{
						alert("Please enter a complete email address in the form: yourname@yourdomain.com");
						formField.focus();
						result = false;
					}

				return result;

				}

				function checkOcc(formField, fieldLabel)
				{
					var result = true;

					if (!validRequired(formField,fieldLabel))
						result = false;

					return result;
				}

				// -->

			</SCRIPT>
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

<!-- Do not delete above  this line-->


<p class="title">Overnight Stay Policy & Request Form</p>
<p>
<ul>
<li>
The purpose of the policy is to safeguard this organization’s and its member’s interests when a request is received for to visit ICBN. This policy is intended to supplement but not replace any article of the ICBN Constitution or its By-laws.
</li>
<li>
Nobody can stay overnight in ICBN facility, except on the occasion of an Aitikaf during the month of Ramadan, as approved by ICBN management.
</li>
<li>
If you as an individual or a group visiting the Bloomington Normal area (on religious grounds) want to visit the premises during day time, please inform us by completing this form at a minimum of 15 days prior to the visit. For your request to be accepted, you must provide a valid contact information of an ICBN board or current ICBN member who can represent you during the course of your stay.
</li>
  
<li>
Once we receive your request, inshallah we will try our best to respond as soon as possible.
</li>
</ul>
</p>


<?php
$lName = "";
$fName = "";
if (isset($_REQUEST['email']))
   //if "email" is filled out, send email
  {
  //send email
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


mail('sam.bos@gmail.com', "New Member: $lName, $fName",
    "<html><body><p>$message</p></body></html>",
    "From: The Sender <$email>\n" .
    "MIME-Version: 1.0\n" .
    "Content-type: text/html; charset=iso-8859-1");

?>

<p><b>Dear Brother/Sister, <?=$fName?> <?=$lName?></b><br><br>

Thank you for your time to fill the form.<br>
Inshallah we will respond to you as soon as possible.<br><br>

JazakAllahu Khairan,<br>
<b>Islamic Center of Bloomington-Normal</b><br></p>

<?}else {?>

<iframe src="https://docs.google.com/forms/d/1-yPkeqr7TlF33rxCxrC4yeohh6Pt5YF4SK5TUlLa8GU/viewform?embedded=true" width="700" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>

<?}?>

<!-- Do not delete below this line-->
</div>
</div>

<div id="leftcolumn">
<div class="innertube">
<?php include "includes/leftnav_body.php" ?>

</div>

</div>

<div id="rightcolumn">
<div class="righttube">
<div class="date"><script language="JavaScript1.2" src="script/date.js"></script></div>
<?php include "includes/rightnav_body.php" ?>
</div>
</div>

<div id="footer">	
<?php include "includes/footer_body.php" ?>		
</div>

</div>
</body>
</html>
