<?php
	session_start();

	//if(isset($_SESSION['user']))
		//header("Location:adminpage.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>

<div class="wrapper">
		<?php
			if(isset($_GET['message'])){
				?>
					<div class="alert alert-danger">
						<?php
							require_once 'messages.php';
							echo $message[$_GET['message']];
						?>
					</div>
				<?php
			}
		?>
		<section class="form signup">
		<header>E-mail</header>
		<form id="logform" action="login.php" method="POST">
		<div class="field input">
		    <label for="login" class="form-label">E-mail</label>
		    <input type="text" class="form-control" name="login" id="login" aria-describedby="loginHelp" required>
		    <div id="loginHelp" class="form-text"></div>
		  </div>
		  <div class="field input">
		    <label for="password" class="form-label">Пароль</label>
		    <input type="password" class="form-control" name="password" id="password" aria-describedby="passwordHelp" required>
		    <div id="passwordHelp" class="form-text"></div>
		  </div>
		  <div class="field button">
		  <button type="button" onclick="loginme()" class="btn btn-dark">Войти</button>
		</div>
		<div class="link"> Создать аккаунт? <a href="registerform.php">Регистрация</a></div>
		</form>
	</div>
		</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

	<script type="text/javascript">
		function loginme(){

			let ok = true;

			loginHelp.innerText = '';
			passwordHelp.innerText = '';

			if(login.value == ''){
				loginHelp.innerText = "Укажите e-mail";
				ok = false;
			}
			if(password.value == ''){
				passwordHelp.innerText = "Укажите пароль";
				ok = false;
			}

			if(password.value.length < 6){
				passwordHelp.innerText = "Пароль не менее 6 символов";
				ok = false;
			}

			if(ok)
				logform.submit();
		}
	</script>
</body>
</html>