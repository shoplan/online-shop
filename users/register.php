<?php
	if($_SERVER['REQUEST_METHOD'] == "POST"){

		$location = "loginform.php";

		$login = $_POST['login'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		$fullname = $_POST['fullname'];

		$ok = true;

		if(isset($login) && isset($password) && isset($repassword) && isset($fullname)){
			require_once 'db.php';
			$user = getUser($login);

			if($user != null){
				header("Location:registerform.php?message=userExist");
				$ok = false;
			}

		
			elseif(strlen($password) != strlen($repassword)){
				header("Location:registerform.php?message=passwordLength");
				$ok = false;
			}

			if($ok)
				registerUser($login, sha1($password), $fullname);
			
		}
    }
    header("Location:$location");