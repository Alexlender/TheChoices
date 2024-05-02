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
    <link rel="stylesheet" href="style-admin.css">
</head>

<body>

    <?php include 'template/header.php'; ?>

    <div class="mega-cont">

    <input type="text" placeholder="поиск" style="font-size:20px; width:20%; margin:auto"/>
    <?php
    require_once 'include/get_items.php';

    $items = get_all_items();
    $counter = 1;
   // echo $items[0];
    foreach ($items as &$item) {
        $winrate = floatval($item->wins)/floatval($item->views)*100;

        echo"
        <div class='cont-item'>
        <h1>$counter</h1>
        <img src='/template/images/$item->image'></img>
        <p>
                Винрейт для $item->name = $winrate%
        </p></div>";
        $counter++;
    }


    ?>
    </div>

</body>