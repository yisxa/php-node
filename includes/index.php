<?php

require_once 'db_connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
   <?php
   include 'header.php';
   ?>
   <br> <br> <br>
   <?php
   include 'calendar.php';

   $calendar = new Calendar();

   echo $calendar->show();


   include 'table.php';


   ?>



   <br><br><br>
   <?php
	include 'footer.php';
	?>

</body>
</html>
