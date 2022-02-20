<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$id = $_POST['uid'];
		$fullname = $_POST['ufullname'];
        $login = $_POST['ulogin'];
        $password = $_POST['upassword'];
        $role_id = $_POST['urole'];
		


		if($id && $fullname && $login && $password && $role_id){
			include '../db.php';
			updateUsers($id, $fullname, $login, $password, $role_id);
			
		}
	}
	
	header("Location:allusers.php");
	
?>