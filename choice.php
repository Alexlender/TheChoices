<?php

require_once 'include/connect.php';
session_start();

$selected = $_GET["value"] == 1 ? $_SESSION["items"][0] : $_SESSION["items"][1];
$notselected = $_GET["value"] == 0 ? $_SESSION["items"][0] : $_SESSION["items"][1];

$selected->wins++;

$connect->query("UPDATE `items` set `wins` = '$selected->wins', `views` = '$selected->views' where `name` = '$selected->name'");
$connect->query("UPDATE `items` set `views` = '$notselected->views' where `name` = '$notselected->name'");
