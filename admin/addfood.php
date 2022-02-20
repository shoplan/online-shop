<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		if($_FILES['fpic']['type'] == 'image/jpeg' || $_FILES['fpic']['type'] == 'image/png'){
			if($_FILES['fpic']['size'] <= 1024*1024){
				move_uploaded_file($_FILES['fpic']['tmp_name'], "../images/".$_FILES['fpic']['name']);
			}
		}

		$fname = $_POST['fname'];
		$fingr = $_POST['fingr'];
		$fprice = $_POST['fprice'];
		$fqty = $_POST['fqty'];
		$fcat = $_POST['fcat'];

		if($fname && $fingr && $fprice && $fcat && $fqty){
			include '../db.php';
			addFood($fname, $fingr, $fprice, $fqty, $_FILES['fpic']['name'], $fcat);
		}
	}
		
	header("Location:menu.php");
?>