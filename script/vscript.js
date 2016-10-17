
				function check(frmname){

					if (!checkField(frmname.Fname, "First Name"))
						return false;

					if (! checkField(frmname.Phone, "Phone"))
						return false;

					if (! checkField(frmname.Question, "Question"))
						return false;

					if (!checkemail(frmname.Email, "Email"))
						return false;

					return true;
				}
				
				function checkContactForm(frmname){

					if (!checkemail(frmname.email, "Email")){
						return false;}

					if (!checkField(frmname.subject, "Subject")){
						return false;}

					if (!checkField(frmname.message, "Message")){
						return false;}

					return true;
				}

				function checkField(formField, fieldLabel){
					var result = true;

					if (!validRequired(formField,fieldLabel))
						result = false;

					return result;
				}



				function validRequired(formField,fieldLabel)
				{
					var result = true;
					var strvalue = formField.value;
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
						result = false;}
return result;

				}

				function checkOcc(formField, fieldLabel)
				{
					var result = true;

					if (!validRequired(formField,fieldLabel))
						result = false;

					return result;
				}

 var RecaptchaOptions = {
    	theme : 'white'
 	};
