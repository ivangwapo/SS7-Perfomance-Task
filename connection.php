<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>The Man Cave Sales Monitoring System</title>
</head>
<body>
  <?php
     

      $hostname = "localhost";
      $username = "root";
      $password = "";
      $database = "mariadb";

      $connection = mysqli_connect($hostname, $username, $password, $database);

      /*
        Create an if-else statement to test if the connection is successful or not.
      */
      if($connection) {
        echo "Connected to database";
      } else {
        echo "Failed to connect";
      }
  ?>
</body>
</html>