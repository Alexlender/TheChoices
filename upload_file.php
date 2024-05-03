<?php
session_start();
require_once 'include/connect.php';

// $postData = file_get_contents('php://input');
// echo print_r($postData['xml']);



$data = file_get_contents($_FILES['uploadedfile']['table.xml']); 
// $xml = $_POST['xml'];

echo print_r($data);

?>