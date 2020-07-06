<?php

//include the header
include "included_files/header/header.php";


?>

<!DOCTYPE html>
<html>
<head>
	<title>cosa job store</title>
	<!--styles for the header--->
	<link rel="stylesheet" type="text/css" href="css/header_css/header.css">
	<!--styles for the body-->
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

	<!--Our company trademark-->
	<blockquote>
		"We advertise jobs to people connected via the site..Join us for more"
	</blockquote>

	<!--form for user log in-->
	<div id="user_log_in">

		
		<form action="handle_forms/login.php" method="post">

			<!-- ####### EMAIL INPUT##########-->
			<input type="text" name="email" id="email" placeholder="Enter yourt email address" class="user_input">


			<!-- ####### PASSWORD INPUT--------->
			<input type="password" name="password" placeholder="Enter your password" class="user_input" id="password">

			<!--submit button-->

			<input type="submit" name="submit" class="user_input" value="Log in "id="log_in">
		</form>
		
	</div>
	<!--alternative to register with this site-->

	<p id="registration_alternative">Don't have an account..Please click the button below to register</p>
	<input type="button" name="register" value="register" class="user_input" id="register_button">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/validate.js"></script>
<script type="text/javascript" src="js/instance/instance_index.js"></script>
</body>
</html>
