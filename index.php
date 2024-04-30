<!DOCTYPE html>
<html>
<head>
    <title>Что лучше??</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS">
    <meta name="description" content="Что лучше? Узнайте тут">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>



<body>
    <header>
        <div class="header">
            <img src="../img/logo.gif">
            <div class="nav-container">
                <nav>
                    <a class="nav_link" href="#">Главная</a>
                    <a class="nav_link" href="#">Форум</a>
                </nav>
            </div>
        </div>
    </header>

    <h1 class="first_text">Так что же лучше??</h1>

    <div id="auth-container">
        <form action="#" method="POST" class="auth">
            <li class="auth_text"><img class="auth_img" src="../img/auth.gif"></li>
            <li>Логин: </li><input name="login" placeholder="Введите логин" type="text">
            <li>Пароль: </li><input name="password" placeholder="Введите пароль	" type="password">
            <li><input type="checkbox">Запомнить пароль?</li>
            <li><button>Войти</button></li>
        </form>
	</div>
    <div id="iframe">
        <iframe src="http://newtimetable.sfu-kras.ru/content/КИ21-06б%20(1%20подгруппа)" frameborder="0" ></iframe>
    </div>

	<div class="anim-img-container">
        <picture>
            <source media="(min-width:650px)" srcset="../img/thunk.png">
            <img src="../img/thunk.png" alt="hmm..." width="60px" height="60px" class="anim-img" onclick="animToggle()">
        </picture>
        <picture>
            <source media="(min-width:650px)" srcset="../img/thunk.png">
            <img src="../img/thunk.png" alt="hmm..." width="60px" height="60px" class="anim-img" onclick="animToggle()">
        </picture>
    </div>
    <div class="content">
        <div class="compare-container">
            <img src="../img/linux.jpg" alt="линукс???">
            <div id="span-compare">Линукс</div>
        </div>
        <img src="../img/or.gif" alt="или" width="70px" height="50px">
        <div class="compare-container">
            <img src="../img/richbitter.jpg" alt="рич биттер">
            <div id="span-compare">Rich Bitter</div>
        </div>
    </div>

    <ul style="text-align: left; margin: auto; width: fit-content;" id="lab3">
        <li style="color: red;" onclick="addText()">Нажми меня</li>
        <li><u>Второй</u></li>
        <li><b>Третий</b></li>
        <li>Четвертый</li>
    </ul>
    <br>
    <p id="text-area">В меня вставят список</p>
    <div style="display: flex; width: fit-content; margin: auto; gap: 10px;"> 
        <input id="text-search"type="search" placeholder="Поиск в списке выше"> 
        <button id="search-btn" onclick="searchItem()">Найти</button>
    </div>
</body>
<script src="../js/script.js"></script>
</html>