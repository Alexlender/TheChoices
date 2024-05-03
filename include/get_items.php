<?php
function get_items()
{
    require_once 'connect.php';

    $result = $connect->query("SELECT * FROM items order by RAND() LIMIT 2");


    $row = $result->fetch_assoc();
    $item1 = new item();
    $item1->name = $row["name"];
    $item1->image = $row["image"];
    $item1->views = $row["views"];
    $item1->wins = $row["wins"];
    $item1->views++;

    $row = $result->fetch_assoc();
    $item2 = new item();
    $item2->name = $row["name"];
    $item2->image = $row["image"];
    $item2->views = $row["views"];
    $item2->wins = $row["wins"];
    $item2->views++;

    return array($item1, $item2);
}

function get_all_items($order, $search)
{
    require_once 'connect.php';

    if (!$order)
        $order = "views";

    // if (!$search)
    // $result = $connect->query("SELECT *, ROUND((wins/views)*100, 2) as winrate FROM TheChoices.items order by $order DESC;");
    // else
    $result = $connect->query("SELECT *, (CASE when views=0 then 0 else ROUND((wins/views)*100, 2) as winrate) FROM TheChoices.items WHERE `name` LIKE '%{$search}%' order by $order DESC;");

    $return = [];

    while ($row = $result->fetch_assoc()) {

        $item = new item();
        $item->name = $row["name"];
        $item->image = $row["image"];
        $item->views = $row["views"];
        $item->wins = $row["wins"];
        $item->price = $row["price"];
        $item->winrate = $row["winrate"];
        array_push($return, $item);
    }


    return $return;
}

