<?php

#include mysql file
include "database/database_config.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<!--general style sheet-->
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<!--image style sheet-->
	<link rel="stylesheet" type="text/css" href="css/image_css/image.css">
</head>
<body>
	<!--header section-->
	<section id="header">
		<!--COSA INC LOGO-->
		<h3 id="logo">COSA</h3>
		<input type="search" name="searchValue" placeholder="search jobs here" id="cosa_search">

		<!--add Jobs link-->
		<a href="#" id="post_job">Click here to post job</a>

		<a href="#" id="log_out">log out</a>
		
	</section>
	<!--horizontal seperator--->
	<hr id="header_seperator">

	<?php

	#get jobs posted and their respective posters

	#query to retrieve all active jobs and their posters

	$retrieve_jobs_info="SELECT first_name,job_name
						 FROM cosa_user
						 INNER JOIN job 
						 ON cosa_user.user_id=job.posted_by";

	#add the query to the database

	$retrieved_results=mysqli_query($dbc,$retrieve_jobs_info);


?>

<?php


while ($row=mysqli_fetch_assoc($retrieved_results)) {
			# code...
		

?>
	

	<!--active jobs section-->
	<section id="active_jobs">
		<div id="products">
			<div class="job_heading">

				<img src="test_images/profile.png" class="profile_pic">
				<h1 class="user_name"><?php echo "{$row['first_name']}"; ?></h1>
				
			</div>
			
			<h4 class="test_job"><?php echo "{$row['job_name']}" ?></h4>
			<hr>
			
		</div>
		

		
	</section>

<?php } ?>


	

	<!--script sources-->
	<script type="text/javascript" src="js/home.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>

</body>
</html>