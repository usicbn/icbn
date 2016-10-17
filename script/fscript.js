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
				
function addBookmark(url, title ) {
        if (window.sidebar) { // firefox
              window.sidebar.addPanel(title, url,"");
        } else if( document.all ) { //MSIE
                window.external.AddFavorite( url, title);
        } else {
               alert("Sorry, your browser doesn't support this");
        }
}
 				

				// -->

			</SCRIPT>
<script language="javascript">
		<!--
function showAdhan()
{
mytrnone = document.getElementById ("Salaathdiv");
mytrtemp = document.getElementById ("Iqamahdiv");

mytrnone.style.display = '';
mytrtemp.style.display = 'none';

}
function showIqamaah()
{
mytrnone = document.getElementById ('Salaathdiv');
mytrtemp = document.getElementById ('Iqamahdiv');

 mytrnone.style.display = 'none';
 mytrtemp.style.display = '';

}

function ChangeIqImg()
{
tempimage = document.getElementById ("iqaimg");
tempimage.src = "images/iqa-b.gif"
}
-->
		</script>