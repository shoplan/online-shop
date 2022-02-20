<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$name = $_POST['cname'];
		
		if($name){
			include '../db.php';
			addCategory($name);
		}
	}
		
	header("Location:categories.php");
?>