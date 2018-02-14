	function signinformValidation()
{
	
	var idnum = document.login.idnum;
	var password = document.login.password;

	{if(idnum_validation(idnum))
	{ {if(password_validation(password))
		{}
	}
	return false;
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
	alert('Form Succesfully Submitted');
		window.location.reload()
		return true;

}

	
} 