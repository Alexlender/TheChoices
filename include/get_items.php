<?php
session_start();
require_once 'connect.php';

$result = $connect->query("SELECT * FROM items order by RAND() LIMIT 2");

while($row = mysql_fetch_array($result)) {
    echo $row['column_name']; // Print a single column data
    echo print_r($row);       // Print the entire row data
}

?>