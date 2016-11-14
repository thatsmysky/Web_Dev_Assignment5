
<?php
include 'news.php';
?>
<html>
    <head>
        <title>Assignment 5</title>
        <meta charset="UTF-8">
         <link rel="stylesheet" type="text/css" href="style/assignment_5.css">
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
         <script src="script/assignment_5.js"></script>
    </head>
    <body>
        <div class="newsDiv">
        <div class="left">Latest</div>
        <div id="news" class="marquee">
            <?php 
            echo $heading;
            ?>
        </div>
        <img class="right" src="images/pause.png">
        <?php
        echo $stories;
        ?>
        </div>

    </body>
</html>



