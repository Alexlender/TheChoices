<header>
    <div class="header">
        <img src="/template/images/logo.gif">
        <div class="nav-container">
            <nav>
                <a class="nav_link" href="../">Главная</a>
            </nav>
        </div>
    </div>
    <?php
    if ($_SESSION['user']['isAdmin'] == 1){
        echo "<a href='../adminpage'>Админ панель</a>";
    }

    if ($_SESSION['user']){
        echo "<a href='../user/signout'>Выйти</a>";
    }
    else{
        echo "<a href='../user/signin'>Войти</a>";
    }
    ?>

</header>