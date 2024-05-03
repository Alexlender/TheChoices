<?php
session_start();
// require_once 'include/connect.php';

$postData = file_get_contents("php://input");
echo $postData;



// $data = $_FILES["xml"]; 
// echo print_r($data);
//$xml = $_POST['xml'];

// echo print_r(simplexml_load_string(file_get_contents('php://xml')));

?>