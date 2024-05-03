<?php

echo $_FILES['image']['name'][2];

$total = count($_FILES['image']['name'][2]);

for( $i=0 ; $i < $total ; $i++ ) {
    $tmpFilePath = $_FILES['image']['tmp_name'][$i];
    $file_name = $_FILES['image']['name'][$i];

    if ($tmpFilePath != ""){
        move_uploaded_file($file, "template/images/". $file_name );
    }
}

// header("Location: /adminpage.php");

?>