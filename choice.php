<?php

session_start();

$selected = $_GET["value"] == 1 ? $_SESSION["items"][0] : $_SESSION["items"][1];

require_once 'include/connect.php';

$connect->query("UPDATE items set wins = $selected->wins+1 where name = $selected->name");


