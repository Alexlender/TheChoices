<?php
session_start();
require_once 'include/connect.php';

// $postData = file_get_contents('php://input');
// echo print_r($postData['xml']);

$xml = simplexml_load_file($_POST['xml']);
// $xml = $_POST['xml'];

echo print_r($xml);

?>