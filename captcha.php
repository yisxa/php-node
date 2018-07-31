<?php
	session_start();
	/*
	function __autoload($class){
		include_once("./includes/{$class}Class.php");
	}
	
	*/
	include("./includes/classes/captchaClass.php");	
	
	/*create class object*/
	$phptextObj = new phptextClass();	
	/*phptext function to genrate image with text*/
	$phptextObj->phpcaptcha('#162453','#fff',150,50,3,5);	
 ?>