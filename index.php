<?php
     session_start();

     if(!$_SESSION['user']){
         header('Location: /reg.php');
     }
?>


<html>
<head>
    <title>Что лучше??</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
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
    </header>

    <h1 class="first_text">Что лучше?</h1>


    


    <div class="content">

    <?php 
    
        $result = $mysqli->query("SELECT id FROM test ORDER BY id ASC");
        
    ?>
    

        <div class="compare-container">
            <img src="/template/images/linux.jpg" alt="линукс???">
            <div id="span-compare">Линукс</div>
        </div>
        <img src="/template/images/or.gif" alt="или" width="70px" height="50px">
        <div class="compare-container">
            <img src="/template/images/richbitter.jpg" alt="рич биттер">
            <div id="span-compare">Rich Bitter</div>
        </div>
        

    </div>

</body>

</html>