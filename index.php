<?php
session_start();

if (!$_SESSION['user']) {
    header('Location: /reg.php');
}
?>


<html>

<head>
    <title>Что лучше??</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include 'template/header.php'; ?>

    
    <h1 class="first_text">Что лучше?</h1>





    <div class="content">

    <?php include 'template/get_items.php'; ?>


        <div class="compare-container">
            <img src="/template/images/linux.jpg" alt="линукс???">
            <div id="span-compare">Линукс</div>
        </div>
        <img src="/template/images/or.gif" alt="или" width="70px" height="50px">
        <div class="compare-container">
            <img src="/template/images/richbitter.jpg" alt="рич биттер">
            <div id="span-compare">Rich Bitter</div>
        </div>


    </div>

</body>

</html>