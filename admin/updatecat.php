<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$cid = $_POST['cid'];
		$cname = $_POST['cname'];
		


		if($cid && $cname){
			include '../db.php';
			updateCategories($cid, $cname);
			
		}
	}
	
	header("Location:categories.php");
	
?>