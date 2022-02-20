<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$id = $_POST['fid'];		

		if($id){
			include '../db.php';
			deleteFood($id);
		}
	}
	
	header("Location:menu.php");
	
?>