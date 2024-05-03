<?php
session_start();

if (!$_SESSION['user']) {
    //header('Location: /auth.php');
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
        $_SESSION['items'] = $items;

        echo '<div class="compare-container" id="1">
    <img src="/template/images/' . $items[0]->image . '" alt="'.$items[0]->name.'">
    <div id="span-compare">' . $items[0]->name . '</div>
    </div>';

        echo '<img src="/template/images/or.gif" alt="или" width="70px" height="50px">';

        echo '<div class="compare-container" id="2">
    <img src="/template/images/' . $items[1]->image . '" alt="'.$items[1]->name.'">
    <div id="span-compare">' . $items[1]->name . '</div>
    </div>';

        ?>


    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="scripts/jq.js"></script>
</body>


</html>