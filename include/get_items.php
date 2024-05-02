<?php

require_once 'connect.php';

$result = $connect->query("SELECT * FROM items order by RAND() LIMIT 2");


$row = $result->fetch_assoc()
$item1 = 
while () {
    echo print_r($row["name"]);
}

?>