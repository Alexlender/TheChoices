<?php
	session_start();

	if ($_SESSION['user']['isAdmin'] != 1) {
        header('Location: ../index.php');
    }
?>


<html>

<head>
    <title>Админка</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include 'template/header.php'; ?>
    админ панель
</body>