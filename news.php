
<?php

require_once 'connection.php';


$query = "SELECT * FROM News";
$result = mysqli_query($connection,$query);

if (!$result)
    die("Database access failed: ");

$row_count = mysqli_num_rows($result);
$heading = "";
$stories = "";

//make html for the headings and stories


mysqli_close($connection);
?>