<?php

//include the database connection
include "../class/database_conn.php";
include "../class/user.php";

$connect=new Dbconnect();
$test=$connect->start_conn();
if ($test) {
	# code...
	//echo "success..";
	$logger=new User();
	$logger->login($_POST['email'],$_POST['password']);
	

}
else
{
	echo "Not valid...";
}




?>