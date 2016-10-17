<html>
<body>

<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $email = $_REQUEST['email'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;
  mail( "majeedsa@yahoo.com", "Subject: $subject",
  $message, "From: $email" );
  echo "Thank you for using our mail form";
  }
else
//if "email" is not filled out, display the form
  {
  echo "<table>
<tr><td>
<form method='post' action='mailform.php'>
<fieldset style='text-align:left; width=50%;'>
<legend><b>Email Details</b></legend>
<table>
<tr><td>Email:</td><td><input name='email' type='text' /></td></tr>
<tr><td>Subject:</td><td><input name='subject' type='text' /></td></tr>
<tr><td>Message:</td><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td> <textarea name='message' rows='15' cols='40'></textarea></td></tr>
<tr><td align=center colspan=2> <input type='submit' /></td></tr>
</table>

</fieldset>
  </form>
  </td>
 </tr>
</table>";
  }
?>

</body>
</html>