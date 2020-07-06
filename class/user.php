<?php



/**

**@author -colins winistone
*/
class User
{
	//login constructor
	public function login($email,$password)
	{
		//initialize data to pass to the next function
		$mail=$email;
		$pass=$password;
		

		//call the next function
		self::get_data_from_database($mail,$pass);

	}


	
	//main function that handles user registration
	public function register_user($first,$last,$email,$location,$contact,$pass)
	{
		//initialize the variables
		$this->first_name=$first;
		$this->last_name=$last;
		$this->email=$email;
		$this->location=$location;
		$this->contact=$contact;
		$this->password=$pass;

		//add the database config file
		include "../database/database_config.php";

		

		//check if connection is successfull
		if($dbc)
		{
			//call a function to handle user registration
			print("Connection available..");
			self::create_query();
		}
		else
		{
			print("No connection at all..");
		}


		

	}

	//registration query
	public function create_query()
	{
		//query variable
		$reg_user="INSERT INTO cosa_user (first_name,last_name,email,phone_number,location,password)
				   VALUES('$this->first_name','$this->last_name','$this->email','$this->location','$this->contact','$this->password')";


		//run the query
		self::run_query($reg_user);



	}

	public function run_query($query)
	{
		include "../database/database_config.php";
		$user_query=mysqli_query($dbc,$query);

		if($user_query)
		{
			print("success..");
		}
		else
		{
			print("Not yet still");
		}

	}

	//get the records from the database
	public function get_data_from_database($mail,$pass)
	{
		//include the database config file
		include "../database/database_config.php";
		
		$get_data="SELECT email,password FROM cosa_user WHERE email='$mail' and password='$pass'";

		$result=mysqli_query($dbc,$get_data);

		//check of the creadentials are registered
		while($row=mysqli_fetch_assoc($result))
		{
			header("Location: http://localhost:8080/app/welcome.php");


		}

		



		
	}





}








?>