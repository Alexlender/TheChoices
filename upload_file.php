<?php

require_once 'include/connect.php';
session_start();

$file = $_FILES["xml"]['tmp_name'];

$connect->query("LOAD XML LOCAL INFILE '$file' INTO TABLE items;");


header("Location: /adminpage.php");



?>