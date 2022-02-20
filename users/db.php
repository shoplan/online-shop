<?php

			try{
				$connection = new PDO("mysql:host=localhost;dbname=foodshop","root","");
			}
			catch(Exception $e){
				echo $e->getMessage();
			}


	function getUser($login){
		global $connection;

		try {
			$query = $connection->prepare("SELECT u.id, u.login, u.password,
			 u.fullname,  r.rolename, r.code
			FROM users u 
			INNER JOIN roles r ON u.role_id = r.id
			WHERE login = ?");
			$query->execute([$login]);
			$result = $query->fetch();
		}
		catch(Exception $e){
			echo $e->getMessage();
		}

		return $result;
	}





	function registerUser($login, $password, $fullname){
		global $connection;

		try {
			$query = $connection->prepare("INSERT INTO users(login, password, fullname) values (?,?,?)");
			$query->execute([$login, $password, $fullname]);
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}


	function getAllUsers(){
		global $connection;

		try{
			$query = $connection->prepare("
				select * from users;
			");
			$query->execute();
			$result = $query->fetchAll();
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
		return $result;
	}