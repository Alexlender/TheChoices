<?php


$total = count($_FILES['image']['name']);

for( $i=0 ; $i < $total ; $i++ ) {
    $tmpFilePath = $_FILES['image']['tmp_name'][$i];
    $file_name = $_FILES['image']['name'][$i];

    if ($tmpFilePath != ""){
        move_uploaded_file($file, "template/images/". $file_name );
    }
}

header("Location: /adminpage.php");

?>