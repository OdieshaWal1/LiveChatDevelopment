

	function formValidation()
{
	var fname = document.registration.fname;
	var lname = document.registration.lname;
	var idnum = document.registration.idnum;
	var spec = document.registration.specialization;
	var yearofstudy = document.registration.yearofstudy;
	var phonenum = document.registration.phonenum;
	var password = document.registration.password;
	var email = document.registration.email;

	if(fname_validation(fname))
	{ if(lname_validation(lname))
		{if(idnum_validation(idnum))
			{if(spec_validation(spec))
				{if(year_validation(yearofstudy))
					{if(phonenum_validation(phonenum))
						{if(password_validation(password))
							{if(email_validation(email))
								{} 
							}
						}
					}
				}
			}
		}
	}
	return false;
}

function fname_validation(fname)
{
	var fname_len = fname.value.length;
	if (fname_len == 0)
	{
		alert("First name should not be empty ");
		fname.focus();
		return false;
	}
return true;
	var letters = /^[A-Za-z]+$/;
		if(fname.value.match(letters))
			{
				return true;
			}
		else
			{
				alert('First name must have alphabet characters only');
				fname.focus();
				return false;
			}
}

function lname_validation(lname)
{
	var lname_len = lname.value.length;
	if (lname_len == 0)
	{
		alert("Last name should not be empty ");
		lname.focus();
		return false;
	}
return true;
	var letters = /^[A-Za-z]+$/;
		if(lname.value.match(letters))
			{
				return true;
			}
		else
			{
				alert('Last name must have alphabet characters only');
				fname.focus();
				return false;
			}
}

function idnum_validation(idnum)
{ var numbers = /^[0-9]+$/;
	if(idnum.value.match(numbers))
	{
		return true;
	}
	else
	{
		alert('Id number must have numeric characters only');
		idnum.focus();
		return false;
	}
}

function spec_validation(spec)
{
	var spec_len = spec.value.length;
	if (spec_len == 0)
	{
		alert("Specialization should not be empty ");
		spec.focus();
		return false;
	}
return true;
	var letters = /^[A-Za-z]+$/;
		if(spec.value.match(letters))
			{
				return true;
			}
		else
			{
				alert('Last name must have alphabet characters only');
				spec.focus();
				return false;
			}
}

function year_validation(yearofstudy)
{ var letters = /^[0-9a-zA-Z]+$/;
	if(yearofstudy.value.match(letters))
	{
		return true;
	}
	else
	{
		alert('Please enter your year of study');
		yearofstudy.focus();
		return false;
	}
}

function phonenum_validation(phonenum)
{ var numbers = /^[0-9]+$/;
	if(phonenum.value.match(numbers))
	{
		return true;
	}
	else
	{
		alert('Phone number must have numeric characters only');
		phonenum.focus();
		return false;
	}
}


function password_validation(password)
{
	var password_len = lname.value.length;
	if (password_len == 0)
	{
		alert("passwordshould not be empty ");
		password.focus();
		return false;
	}
return true;
}


function email_validation(email)
{
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(email.value.match(mailformat))
	{

		alert('Form Succesfully Submitted');
		window.location.reload()
		return true;
	}
	else
	{
		alert("You have entered an invalid email address!");
		return false;
	}
} 