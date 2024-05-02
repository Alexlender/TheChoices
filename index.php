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
        echo  $items[0]->$name;
        
        echo '<div class="compare-container">
    <img src="/template/images/' . $items[0]->image . '" alt="линукс???">
    <div id="span-compare">' . $items[1]->name . '</div>
    </div>';
        ?>
        <img src="/template/images/or.gif" alt="или" width="70px" height="50px">
        <div class="compare-container">
            <img src="/template/images/richbitter.jpg" alt="рич биттер">
            <div id="span-compare">Rich Bitter</div>
        </div>


    </div>

</body>

</html>