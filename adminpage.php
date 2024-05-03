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
        <div class="mini-cont"
            style="margin:auto; width:fit-content; display: grid; grid-template-columns:2fr 1fr 2fr;  gap: 30px;">
            <form method="GET" action="adminpage.php">

                <select name="sort">
                    <option value="" disabled selected>Сортировака</option>
                    <!-- <option value="poor">Сначала недорогие</option> -->
                    <option value="price">Сначала дорогие</option>
                    <option value="winrate">Сначала крутые</option>
                    <option value="name">Сначала на букву "А"</option>
                </select>
                <input type='submit' value="Показать" />

            </form>

            <form method="GET" action="search.php">
                <input name='text' type="text" placeholder="поиск" style="font-size:20px; width:80%; margin:auto" />
                <input type="submit" value="Найти"/>
            </form>
            <div style="width:50%;">
                <form method="GET" action="upload_file.php" style="display: grid; grid-template-rows: 1fr 1fr 1fr">
                    <label>Загрузить XML-файл новой штуки</label>
                    <input name="xml" type="file" accept="text/xml" />
                    <input type="submit" value="Загрузить"/>
                </form>
            </div>
        </div>
        <?php
        require_once 'include/get_items.php';

        $items = get_all_items($_GET['sort']);
        $counter = 1;
        foreach ($items as &$item) {

            echo "
        <div class='cont-item'>
        <h1>$counter</h1>
        <img src='/template/images/$item->image'></img>
        <div style='display:grid; grid-template-rows:1fr 1fr;'> 
        <p>
                Винрейт $item->name $item->winrate%
        </p>
        <p>
            Стоимость $item->price рублей
        </p>
        </div>
        </div>";
            $counter++;
        }


        ?>
    </div>

</body>