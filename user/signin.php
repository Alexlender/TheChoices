<?php

    session_start();
    require_once '../include/connect.php';

    error_reporting(-1);
    ini_set('display_errors', 'On');

    $login = $_POST['login'];
    $passwd = md5($_POST['passwd']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `passwd` = '$passwd'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['login'],
            "name" => $user['name'],
            "email" => $user['email'],
            "isAdmin" => $user['isAdmin']
        ];
        header('Location: ../index.php');
    }
    else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: ../auth.php');
    }
    
