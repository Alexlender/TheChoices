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

        <?php
        require_once 'include/get_items.php';

        $items = get_items();

        echo '<div class="compare-container">
    <img src="/template/images/' . $items[0]->image . '" alt="линукс???">
    <div id="span-compare">' . $items[0]->name . '</div>
    </div>';
       
        echo '<img src="/template/images/or.gif" alt="или" width="70px" height="50px">';

        echo '<div class="compare-container">
    <img src="/template/images/' . $items[1]->image . '" alt="линукс???">
    <div id="span-compare">' . $items[1]->name . '</div>
    </div>';

        ?>


    </div>

</body>

</html>