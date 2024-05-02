<?php

require_once 'connect.php';

$result = $connect->query("SELECT * FROM items order by RAND() LIMIT 2");

while ($row = $result->fetch_assoc()) {
    echo print_r($row["name"]);
}

?>