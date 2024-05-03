<header>
    <div class="header">
        <img src="/template/images/logo.gif">
        <div class="nav-container">
            <nav>
                <a class="nav_link" href="../index.php">Главная</a>
            </nav>
        </div>
    </div>
    <?php
    if ($_SESSION['user']['isAdmin'] == 1){
        echo "<a href='../adminpage.php'>Админ панель</a>";
    }
    ?>
    <a href="../user/signout.php">Выйти</a>
</header>