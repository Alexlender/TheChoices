<?php
function get_items()
{
    require_once 'connect.php';

    $result = $connect->query("SELECT * FROM items order by RAND() LIMIT 2");


    $row = $result->fetch_assoc();
    $item1 = new item();
    $item1->name = $row["name"];
    $item1->image = $row["image"];
    echo  print_r($item1->name);

    $row = $result->fetch_assoc();
    $item2 = new item();
    $item2->name = $row["name"];
    $item2->image = $row["image"];

    return array($item1, $item2);
}


