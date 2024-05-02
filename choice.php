<?php

session_start();
require_once 'include/connect.php';

$selected = $_GET["value"] == 1 ? $_SESSION["items"][0] : $_SESSION["items"][1];



$connect->query("UPDATE `items` set `wins` = '$selected->wins+1' where `name` = '$selected->name'");
