<?php
session_start();
require_once 'include/connect.php';

// $postData = file_get_contents('php://input');
// echo print_r($postData['xml']);



$xml = simplexml_load_string($_POST['xml']);
// $xml = $_POST['xml'];

echo print_r(file_get_contents('php://input'));

?>