<?php
	session_start();

	if ($_SESSION['user']) {
        header('Location: ../index.php');
    }
?>

<html>
<head>
	<title>Что лучше?</title>
	<metacharset=”utf-8”>
	<link href="style_sign.css" rel="stylesheet">
</head>
<body>
	<div class="auth__form">
		<form action="include/signin.php" method="post">
			<label>Логин</label>
			<input type="text" name="login" placeholder="Введите логин">
			<label>Пароль</label>
			<input type="password" name="passwd" placeholder="Введите пароль">
			<button type="submit">Войти</button>
			<p>
				<a href="/reg.php">Регистрация</a>
			</p>
			<p>
				<a href="/forgot_password.php">Восстановление пароля</a>
			</p>
		</form>
	</div>
</body>
</html>
