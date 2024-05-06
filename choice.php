<?php

require_once 'include/connect.php';
session_start();

$selected = $_GET["value"] == 1 ? $_SESSION["items"][0] : $_SESSION["items"][1];
$notselected = $_GET["value"] == 2 ? $_SESSION["items"][1] : $_SESSION["items"][0];


// echo '<div class="compare-container" id="1">
// <img src="/template/images/' . $selected->image . '" alt="' . $selected->name . '">
// <div id="span-compare">' . $selected->name . '</div>
// </div>';

// echo '<div class="compare-container" id="2">
// <img src="/template/images/' . $notselected->image . '" alt="' . $notselected->name . '">
// <div id="span-compare">' . $notselected->name . '</div>
// </div>';

$connect->query("UPDATE `items` set `wins` = `wins` + 1, `views` = `views` + 1 where `name` = '$selected->name'"); 
$connect->query("UPDATE `items` set `views` = `views` + 1 where `name` = '$notselected->name'");
//echo print_r();
//echo print_r();

$_SESSION["items"] = [];
