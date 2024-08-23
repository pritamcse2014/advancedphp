<?php require('includes/header.php');

$file = $_FILES['file'];

// echo "<pre>";
// echo var_dump($file);
// echo "<pre>";

$name = $file['name'];
$type = $file['type'];
$tmp_name = $file['tmp_name'];

// $size = $file['size'];
// echo floor($size / 1000), " KB ";

if (!empty($name)) {
    $location = "uploads/";
    if (move_uploaded_file($tmp_name, $location.$name)) {
        echo "File Uploaded Successfully.";
        echo "<br>";
        $path = $location.$name;
        echo "<img src='$path' width='250' height='250'/>";
    } else {
        echo "File Upload Failed.";
    }
} else {
    echo "File Not Found.";
}

require('includes/footer.php'); ?>