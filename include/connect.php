<?php

$host="ggradio.ru";
$port=3306;
$socket="";
$user="vlad";
$password="ChinChanJopa12";
$dbname="TheChoices";

$connect = new mysqli($host, $user, $password, $dbname, $port, $socket)
    or die ('Could not connect to the database server' . mysqli_connect_error());
