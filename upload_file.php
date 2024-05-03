<?php
session_start();
require_once 'include/connect.php';

$xml = $_POST['xml'];

echo print_r($xml);

?>