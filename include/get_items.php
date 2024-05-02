<?php

require_once 'connect.php';

$result = $connect->query("SELECT * FROM items order by RAND() LIMIT 2");

echo print_r($result[0]["name"])

?>