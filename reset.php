<?php

require_once 'include/connect.php';
session_start();

$connect->query("UPDATE `items` set `wins` = 0, `views` = 0");

header("Location: /adminpage.php");