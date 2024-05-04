<?php

require_once 'include/connect.php';
session_start();

$selected = $_GET["value"] == 1 ? $_SESSION["items"][0] : $_SESSION["items"][1];
$notselected = $_GET["value"] == 0 ? $_SESSION["items"][0] : $_SESSION["items"][1];


$connect->query("UPDATE `items` set `wins` = `wins` + 1, `views` = `views` + 1 where `name` = '$selected->name'");
$connect->query("UPDATE `items` set `views` = `views` + 1 where `name` = '$notselected->name'");

$_SESSION["items"] = [];
