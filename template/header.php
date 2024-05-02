<?php
    session_start();

?>

<header>
    <div class="header">
        <img src="/template/images/logo.gif">
        <div class="nav-container">
            <nav>
                <a class="nav_link" href="#">Главная</a>
                <a class="nav_link" href="#">Форум</a>
            </nav>
        </div>
    </div>
    <?php
    if ($_SESSION['user']['isAdmin'] == 1){
        echo "<a href='../adminpage.php'>Админ панель</a>";
    }
    ?>
    <a href="../include/signout.php">Выйти</a>
</header>