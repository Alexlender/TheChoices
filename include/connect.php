<?php

    $connect = mysqli_connect('ggradio.ru', 'vlad', "ChinChanJopa12", "TheChoices");

    if (!$connect) {
        die('Error connect to Database');
    }
