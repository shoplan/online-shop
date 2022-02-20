<!DOCTYPE html>
<html>
<head>
	<title>Register form</title>
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
      <header>Register</header>
		<form id="regform"  action="register.php" method="POST">
		   <div class="field input">
		    <label for="fullname" class="form-label">Имя</label>
		    <input type="text" class="form-control" name="fullname" id="fullname" aria-describedby="fullnameHelp" required>
		    <div id="fullnameHelp" class="form-text"></div>
		  </div>
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
		  <div class="field input">
		    <label for="repassword" class="form-label">Подтвердите пароль</label>
		    <input type="password" class="form-control" name="repassword" id="repassword" aria-describedby="repasswordHelp" required>
		    <div id="repasswordHelp" class="form-text"></div>
		  </div>
		  <div class="field button">
		  <button type="button" onclick="register()" class="btn btn-dark">Регистрация</button>
		</div>
		<div class="link">У вас есть аккаунт? <a href="loginform.php">Войти</a></div>
		</form>
	</div>
		</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

	<script type="text/javascript">
		function register(){

			let ok = true;

			fullnameHelp.innerText = '';
			loginHelp.innerText = '';
			passwordHelp.innerText = '';
			repasswordHelp.innerText = '';

			if(fullname.value == ''){
				fullnameHelp.innerText = "Укажите имя";
				ok = false;
			}
			if(login.value == ''){
				loginHelp.innerText = "Укажите e-mail";
				ok = false;
			}
			if(password.value == ''){
				passwordHelp.innerText = "Укажите пароль";
				ok = false;
			}
			if(repassword.value == ''){
				repasswordHelp.innerText = "Повторите пароль";
				ok = false;
			}

			if(password.value != repassword.value){
				passwordHelp.innerText = repasswordHelp.innerText = "Пароли не совпадают";
				ok = false;
				return;
			}

			if(password.value.length < 6){
				passwordHelp.innerText = "Пароль не менее 6 символов";
				ok = false;
			}

			if(repassword.value.length < 6){
				repasswordHelp.innerText = "Пароль не менее 6 символов";
				ok = false;
			}


			if(ok)
				regform.submit();
		}
	</script>
</body>
</html>