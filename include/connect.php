<?php

require_once("options.php");

$connect = new mysqli($host, $user, $password, $dbname, $port, $socket)
    or die('Could not connect to the database server' . mysqli_connect_error());
mysqli_options($connect, MYSQLI_OPT_LOCAL_INFILE, true);
class item
{
    public ?string $name;
    public int $views;
    public int $wins;
    public ?string $image;
    public int $price;
    public float $winrate;
}
