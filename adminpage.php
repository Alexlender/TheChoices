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

    <div class="super-mega-cont" style="display: flex; flex-direction: row; justify-content: space-between;">
        <div class="mega-cont">
            <div class="mini-cont"
                style="margin:auto; width:fit-content; display: grid; grid-template-columns:1fr 1fr 1fr 1fr 1fr;  gap: 30px;">
                <form method="GET" action="adminpage.php">

                    <select name="sort">
                        <!-- <option value="poor">Сначала недорогие</option> -->
                        <?php
                        $selected = $_GET['order'];
                        if (!$selected == '')
                            $selected = 'winrate';
                        echo "<option value='price'" + ($selected == "price" ? "selected" : "") + ">Сначала дорогие</option>";
                        echo "<option value='winrate'" + ($selected == "winrate" ? "selected" : "") + ">Сначала крутые</option>";
                        echo "<option value='name'" + ($selected == "name" ? "selected" : "") + ">Сначала на букву \"А\"</option>";
                        ?>
                    </select>
                    <input type='submit' value="Показать" />

                </form>

                <form method="GET" action="adminpage.php">
                    <input name='search' type="text" placeholder="поиск"
                        style="font-size:20px; width:80%; margin:auto" />
                    <input type="submit" value="Найти" />
                </form>

            </div>
            <?php
            require_once 'include/get_items.php';

            // $some_error = error12();
            
            $items = get_all_items($_GET['sort'], $_GET['search']);
            $counter = 1;
            foreach ($items as &$item) {

                echo "
        <div class='cont-item'>
        <h1>$counter</h1>
        <img src='/template/images/$item->image' alt='$item->image'></img>
        <div style='display:grid; grid-template-rows:1fr 1fr;'> 
        <p style='font-family: Colibri'>
                Винрейт <span style='font-family: Comic Sans MS'>$item->name</span> $item->winrate%
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

        <div class=forms style="width: 30%;display: flex; flex-direction: column; align-items: flex-start;">

            <div style="width:50%;">
                <form method="POST" enctype="multipart/form-data" action="upload_file.php"
                    style="display: grid; grid-template-rows: 1fr 1fr 1fr">
                    <label>Загрузить XML-файл новой штуки</label>
                    <input name="xml" type="file" accept="text/xml" />
                    <input type="submit" value="Загрузить" />
                </form>
            </div>


            <form method="POST" enctype="multipart/form-data" action="upload_image.php"
                style="display: grid; grid-template-rows: 1fr 1fr 1fr">
                <label>Загрузить картинки</label>
                <input name="image[]" type="file" accept="image/jpg" multiple="multiple" />
                <input name="image[]" type="file" accept="image/jpg" multiple="multiple" hidden />
                <input name="image[]" type="file" accept="image/jpg" multiple="multiple" hidden />
                <input type="submit" value="Загрузить" />
            </form>

            <form method="POST" enctype="multipart/form-data" action="reset.php">
                <input id="red_button" type="submit" value="Сбросить вообще всё" />
            </form>
        </div>
    </div>

</body>