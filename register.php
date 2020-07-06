<?php 

include "included_files/header/header.php";


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/header_css/header.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
	<blockquote>
		"We are glad to welcome you to COSA .Lets join hands and do business"
	</blockquote>

	<!--registration form-->
	<div id="registration_form">

		<!--REGISTRATION FORM--->
		<form action="handle_forms/register_user.php" method="get">
			<input type="text" name="first_name" class="user_input" placeholder="Fisrtname">
			<input type="text" name="last_name" class="user_input" placeholder="Last name">
			<input type="text" name="email" class="user_input" placeholder="Email">

			<!--user location-->
			<input type="text" name="location" id="location" placeholder="Enter your location" class="user_input">

			<!-- #####PHONE NUMBER--->
			<input type="text" name="phone number" class="user_input" placeholder="Phone number">

			<!-- #######PASSWORD------>
			<input type="text" name="password" class="user_input" placeholder="password">
			<!--this gets the profile picture of our user and its optional-->
			<p id="profile_info">Upload your profile pic</p>

			<!--FILE INPUT---->
			<input type="file" class="user_input">

			<!--register button-->
			<input type="submit" name="register" value="Register" class="user_input">
		</form>
		
	</div>

	<hr>

	<!--create a footer-->
	<footer>
		<blockquote>
			<p>This is &copy;Collins production</p>
			<p>named GIFT &trade;</p>
		</blockquote>
	</footer>

<script type="text/javascript" src="js/register.js"></script>
</body>
</html>