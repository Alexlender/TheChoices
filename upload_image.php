<?php


$file = $_FILES["image"]['tmp_name'];
$file_name = $_FILES['image']['name'];

move_uploaded_file($file, "template/images/". $file_name );

header("Location: /adminpage.php");



?>