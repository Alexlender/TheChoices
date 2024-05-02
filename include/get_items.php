<?php
session_start();
require_once 'connect.php';

$result = $connect->query("SELECT * FROM items order by RAND() LIMIT 2");

print_r($result)

?>