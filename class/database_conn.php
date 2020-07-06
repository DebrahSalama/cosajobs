<?php

class Dbconnect
{
	

	public function __construct()
	{
		$this->host_name="localhost";
		$this->user_name="root";
		$this->password="";
		$this->database_name="user";

	}

	public function start_conn()
	{
		$conn=mysqli_connect($this->host_name,$this->user_name,$this->password,$this->database_name);
		if ($conn) {
			# code...

			return $conn;
		}
		else
		{
			echo "Error in connection to the server..";
		}
	}
}

?>