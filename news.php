
<?php

require_once 'connection.php';

//Get from the database all the news
$query = "SELECT * FROM News";
$result = mysqli_query($connection,$query);

//If database failed or doesn't exist, throw an error
if (!$result)
    die("Database access failed: ");

//Variables
$row_count = mysqli_num_rows($result);
$heading = ""; //Heading for marquee - gather HTML from database for headings
$stories = ""; //HTML for body - all details will be hidden at first

//Make HTML for the headings and stories
for ($j = 0; $j < $row_count; ++$j) {
    $row = mysqli_fetch_array($result); //fetch the next row
    $heading.=display_heading($row);
    $stories.=load_detail($row);
}

  
mysqli_close($connection);

//Make HTML for marquee
function display_heading($row) {
    $heading = '<div class ="news_item" data-story-id=' . $row["ID"] . '>' . $row["Heading"] . '</div>';
    $heading .= '<img class = "news_img" src="images/NBA.jpg">';
    return $heading;
}

//Make HTML for details
function load_detail($row) {
    $detail = '<div class="detail_hidden" id=' . $row["ID"] . ' >';
    $detail.= '<img class="news_photo" src="data:' .$row["Picture_Type"] . ';base64,' . base64_encode($row["Picture"]) . '">';
    $detail.= '<div class="news_heading">' . $row["Heading"] . '</div>';
    $detail.= '<div class="date">' . $row["Date"] . '</div>';
    $detail.= '<div class="news_detail">' . $row["Details"] . '</div>';
    $detail.= '</div>';
    return $detail;
    
}
?>
