<?php
session_start();
require_once '../include/connect.php';

$name = $_POST['name'];
$login = $_POST['login'];
$email = $_POST['email'];
$passwd = $_POST['passwd'];
$passwd_confirm = $_POST['passwd_confirm'];

if ($passwd != $passwd_confirm) {
    $_SESSION['passErr'] = 1;
    header('Location: ../reg.php');
} else {
    $passwd = md5($passwd);
    $isAdmin = 0;
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
            mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `login`, `email`, `passwd`, `isAdmin`) VALUES (NULL, '$name', '$login', '$email', '$passwd', '$isAdmin')");

            $_SESSION['message'] = 'Регистрация прошла успешно';
            header('Location: ../auth.php');
        }
    }
}
?>