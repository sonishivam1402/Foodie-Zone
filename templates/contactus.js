function validateForm()
{
	var a=document.getElementsByName("phone")[0].value;
	if(a.length!=10)
		{
			alert("Phone number should be of 10 digits");
			return false;
		}

	var x = document.forms["myForm"]["psw"].value;
	var y = document.forms["myForm"]["psw-repeat"].value;

	if(x.length < 5)
	{
		alert("Password should be greater than 5 digits.");
		return false;
	}

	if(x.length > 9)
	{
		alert("Password should be less than 9 digits.");
		return false;
	}

   if (x != y) 
       {
            alert("Incorrect Password");
            return false;
       }
}