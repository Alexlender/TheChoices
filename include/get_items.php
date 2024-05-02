<?php

require_once 'connect.php';

$result = $connect->query("SELECT * FROM items order by RAND() LIMIT 2");

while($row = mysql_fetch_array($result)) {
    echo $row['column_name'];
    echo print_r($row);       
}

?>