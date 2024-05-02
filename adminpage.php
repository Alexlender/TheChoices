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
    <div class="mini-cont" style="margin:auto; width:fit-content; display: grid; grid-template-columns:2fr 1fr;  gap: 20px;">
    <form method="GET" action="adminpage.php">

        <select name="sort">
            <option value="" disabled selected>Сортировака</option>
            <!-- <option value="poor">Сначала недорогие</option> -->
            <option value="price">Сначала дорогие</option>
            <option value="winrate">Сначала крутые</option>
            <option value="name">Сначала на букву "А"</option>
        </select>
        <input type='submit' value="Показать"/>

    </form>

    
    <input type="text" placeholder="поиск" style="font-size:20px; width:80%; margin:auto"/>
    <a href="load_item.php">Загрузить объект</a>
    </div>
    <?php
    require_once 'include/get_items.php';

    $items = get_all_items($_GET['sort']);
    $counter = 1;
   // echo $items[0];
    foreach ($items as &$item) {

        echo"
        <div class='cont-item'>
        <h1>$counter</h1>
        <img src='/template/images/$item->image'></img>
        <p>
                Винрейт для $item->name = $item->winrate% | Стоимость = $item->price
        </p></div>";
        $counter++;
    }


    ?>
    </div>

</body>