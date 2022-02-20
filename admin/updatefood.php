<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST'){


		$id = $_POST['fid'];
		$title = $_POST['fname'];
		$ingredient = $_POST['fingr'];
		$qty = $_POST['fqty'];
		$price = $_POST['fprice'];
		$category_id = $_POST['fcat'];
		

	;

		if($id && $title && $ingredient && $qty && $price && $category_id){
			include '../db.php';
			updateFood($id, $title, $ingredient, $qty, $price, $category_id);
			
		}
	}
	
	header("Location:menu.php");
	
?>