<?php

session_start();

if ($_SESSION['user']['isAdmin'] != 1) {
    header('Location: /index.php');
    die();
}

echo print_r($_FILES);

$total = count($_FILES['image']['name']);

for( $i=0 ; $i < $total ; $i++ ) {
    $tmpFilePath = $_FILES['image']['tmp_name'][$i];
    $file_name = $_FILES['image']['name'][$i];

    if ($tmpFilePath != ""){
        move_uploaded_file($tmpFilePath, "template/images/". $file_name );
    }
}

header("Location: /adminpage.php");

?>