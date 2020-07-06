<?php

include "../class/user.php";

$first_name=$_GET['first_name'];
$last_name=$_GET['last_name'];
$email=$_GET['email'];
$location=$_GET['location'];
$phone_number=$_GET['phone_number'];
$password=$_GET['password'];

//register the user
$register=new User();

$register->register_user($first_name,$last_name,$email,$location,$phone_number,$password);








?>