
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
for ($j = 0; $j < $row_count; ++$j) {
    $row = mysqli_fetch_array($result); //fetch the next row
    $heading.=display_heading($row);
}
   

mysqli_close($connection);

function display_heading($row) {
    $heading = '<div class ="news_item" >' . $row["Heading"] . '</div>';
    $heading .= '<img class = "news_img" src="images/NBA.jpg">';
    return $heading;
}
?>
