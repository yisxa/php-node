<?php

require_once './includes/db_connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Xivig.com">
  <meta name="keywords" content="Responsive web design, web programming, html5, css3, bootstrap, javascript, jquery, ajax, json">
  <meta name="description" content="Your most coveting responsive website creator and all in one solution">
  <link type="text/css" rel="stylesheet" href="style.css">
  <title>Database Connection with CRUD</title>
  <!-- favicon -->
  <link rel="icon" type="image/png" href="favicon.ico" />

  <!-- Google fonts -->
  <!--
  <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed:100,200,300,400,500,700" rel="stylesheet">
  -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
</head>
<body>
   <?php
   // including header
   include './includes/header.php';
    echo "<br> <br> <br>";  //line break after header
    //including table
   include './includes/table.php';
    echo "<br> <br> <br>"; //line break after table
   //including calendar
    include './includes/calendar.php';

    $calendar = new Calendar();

    echo $calendar->show();
    echo "<br><br><br>"; //line break after Calendar
   // including footer
	include './includes/footer.php';
	?>

</body>
</html>
