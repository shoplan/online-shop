<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$id = $_POST['uid'];		

		if($id){
			include '../db.php';
			deleteUsers($id);
		}
	}
	
	header("Location:allusers.php");
	
?>