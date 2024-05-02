<?php
session_start();
require_once 'connect.php';

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password != $password_confirm) {
    $_SESSION['passErr'] = 1;
    header('Location: ../reg.php');
} else {
    $password = md5($password);

    $ans = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");

    if (mysqli_num_rows($ans) > 0) {
        $_SESSION['message'] = 'Данный логин уже занят';
        header('Location: ../reg.php');
    } else {
        $ans = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");

        if (mysqli_num_rows($ans) > 0) {
            $_SESSION['message'] = 'Данный email занят';
            header('Location: ../reg.php');
        } else {
            mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `login`, `email`, `passwd`) VALUES (NULL, '$full_name', '$login', '$email', '$password')");

            $_SESSION['message'] = 'Регистрация прошла успешно';
            header('Location: ../auth.php');
        }
    }
}
?>