<?php

	include_once('db_connect.php');
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		try{
			$stmt = $conn->prepare("DELETE FROM contacts WHERE id=?");
			$stmt->execute(array($id));
			if($stmt){
				echo "Are you sure! Want to delete the record?";
				header("Location:../index.php");
			}

		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

 ?>