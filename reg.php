<?php
session_start();

if ($_SESSION['user']) {
    header('Location: ../index.php');
}

if ($_SESSION['passErr'] == 1){
    echo "<script>alert('Пароли не совпадают')</script>";
}
?> 

<html>

<head>
    <title>ЧТО ЛУЧШЕ??????</title>
    <metacharset=”utf-8”>
        <link href="style_sign.css" rel="stylesheet">
</head>

<body>
    <div class="auth__form">
        <form action="user/signup.php" method="post" enctype="multipart/form-data">
            <label>Фамилия и имя</label>
            <input type="text" name="name" placeholder="Введите фамилию и имя">
            <label>Логин</label>
            <input type="text" name="login" placeholder="Введите логин">
            <label>Почта</label>
            <input type="email" name="email" placeholder="Введите свою электронную почту">
            <label>Пароль</label>
            <input type="password" name="passwd" placeholder="Введите пароль">
            <label>Подтверждение пароля</label>
            <input type="password" name="passwd_confirm" placeholder="Подтвердите пароль">
            <button type="submit">Зарегистрироваться</button>
            <p>
                <a href="/auth.php">Авторизация</a>
            </p>

        </form>
    </div>
</body>

</html>