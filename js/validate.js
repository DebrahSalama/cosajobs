/**

**@author Collins Winistone

**

**/

//form validation object

function Validate()
{
	

	//check if user email is valid

	this.check_user_email=function(email)
	{

		//initialize email
		this.email=email;

		//regular expression for our email
		var regexp=/[^@]+@gmail.com|@yahoo.com/;

		//check the email
		var is_it_valid=regexp.test(this.email);

		if (is_it_valid)
		{
			return true;
		}
		else
		{
			return false;
		}
		

	}

	this.check_user_password=function(password)
	{

		//initialize the password
		this.password=password;

		//Ensure password length is  > 8 characters
		var is_password_length_okay=this.check_length();

		return is_password_length_okay;
	
	}

	//ensures password length is > 8
	this.check_length=function()
	{
		if (this.password.length > 8) 
		{
			return true;
		}

		else
		{
			return false;
		}
	}

	//validate username

	this.check_user_name=function(u_name)
	{

		//ensure the name is not greator than 15 characters

		if (u_name.length >15) 
		{
			return false;
		}
		else
		{
			return true;
		}
	}

	//check phone number
	this.check_phone_number=function(p_num)
	{

		

		//initialize phone number
		this.phone_number=p_num;
		//ensure phone number is numeric
		var phone_regexp=/\d+/;

		if (phone_regexp.test(p_num)) 
		{
			return true;
		}
		else
		{
			return false;
		}

	}


	


}

