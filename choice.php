<?php

require_once 'include/connect.php';
session_start();

$selected = $_GET["value"] == 1 ? $_SESSION["items"][0] : $_SESSION["items"][1];

$selected->wins++;

$connect->query("UPDATE `items` set `wins` = '$selected->wins' where `name` = '$selected->name'");