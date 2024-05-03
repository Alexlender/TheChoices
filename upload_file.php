<?php
session_start();
require_once 'connect.php';

$xml = $_POST['xml'];

echo print_r($xml);

?>