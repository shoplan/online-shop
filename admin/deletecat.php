<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$id = $_POST['cid'];		

		if($id){
			include '../db.php';
			deleteCategories($id);
		}
	}
	
	header("Location:categories.php");
	
?>