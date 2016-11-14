<?php 
  $db_hostname = 'kc-sce-appdb01';
  $db_database = "lkmq7";
  $db_username = "lkmq7";
  $db_password = "lDf3ndaGElkmY26jzGJp";
  

 $connection = mysqli_connect($db_hostname, $db_username,$db_password,$db_database);
 
 if (!$connection)
    die("Unable to connect to MySQL: " . mysqli_connect_errno());
?>
