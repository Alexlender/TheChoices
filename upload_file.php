<?php

session_start();

if ($_SESSION['user']['isAdmin'] != 1) {
    header('Location: /index.php');
    die();
}

require_once 'include/connect.php';

$file = $_FILES["xml"]['tmp_name'];

$connect->query("LOAD XML LOCAL INFILE '$file' INTO TABLE items;");


header("Location: /adminpage.php");



?>