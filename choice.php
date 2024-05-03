<?php

session_start();

if ($_SESSION['user']['isAdmin'] != 1) {
    header('Location: /index.php');
}

require_once 'include/connect.php';

$selected = $_GET["value"] == 1 ? $_SESSION["items"][0] : $_SESSION["items"][1];
$notselected = $_GET["value"] == 0 ? $_SESSION["items"][0] : $_SESSION["items"][1];


$connect->query("UPDATE `items` set `wins` = `wins` + 1, `views` = `views` + 1 where `name` = '$selected->name'");
$connect->query("UPDATE `items` set `views` = `views` + 1 where `name` = '$notselected->name'");
