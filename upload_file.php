<?php

require_once 'include/connect.php';
session_start();


$postData = simplexml_load_string(file_get_contents($_FILES["xml"]['tmp_name']));
echo print_r($postData);

$file = $_FILES["xml"]['tmp_name'];

$result = $connect->query("LOAD XML LOCAL INFILE '$file' INTO TABLE items;");

echo $result;





?>