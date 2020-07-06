/**

**@author colins winistone

**/

//initialize variables


$('#log_in').on('click',function(){
	$user_email=$('#email').val();
	$user_password=$('#password').val();

	var test=new Validate();
	var valid_email=test.check_user_email($user_email);

	//check validity of email and password

	if (valid_email) 
	{
		alert("The email is valid..");
		var valid_password=test.check_user_password($user_password);

		//check if password is valid
		if(valid_password)
		{
			alert("Please Enter a  valid password");
		}
		else
		{
			alert("Wrong password,try again later..");
		}

	}

});
