<!doctype html>
<html>

<head>
<title>Collins application</title>
</head>
<body>

    <h2>Multidimensional arrays</h2>
    <?php

   	
$host="localhost";
$username="root";
$password="";
$database_name="user";

//the database connection variable is $dbc03



$dbc=mysqli_connect($host,$username,$password,$database_name);

if ($dbc) {
  # code...
  //select all data from the databases
  $q="SELECT * FROM cosa_user where user_id=4";

  $result=mysqli_query($dbc,$q);

  if ($result) {
    # code...
    echo "Results available....<br>";

    while ($row=mysqli_fetch_assoc($result)) {
      # code...
      $name=$row['email'];
      echo "$name";
    }
  }
}

    ?>
    <script type="text/javascript" src="js/Validate.js"></script>
    <script type="text/javascript">
  
    </script>
</body>
</html>