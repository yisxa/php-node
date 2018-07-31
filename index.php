<?php session_start();

if(isset($_POST['Submit'])){
	// code for check server side validation
	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
		$msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.		
	}else{// Captcha verification is Correct. Final Code Execute here!		
		$msg="<span style='color:green'>The Validation code has been matched.</span>";		
	}
}

	
?>


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
  <link type="text/css" rel="stylesheet" href="./css/style.css">
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
   include './includes/tableData.php';
    echo "<br> <br> <br>"; //line break after table
    
  //including caotcha table
    include './includes/captchaTable.php';
    echo "<br> <br> <br>"; //line break after table
    
   //including calendar
    include './includes/classes/calendarClass.php';
    $calendar = new Calendar();
    echo $calendar->show();
    echo "<br><br><br>"; //line break after Calendar
    
   // including footer
	include './includes/footer.php';
	?>
<script src="./js/script.js" type='text/javascript'></script>

</body>
</html>
