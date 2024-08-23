<?php require('includes/header.php');

$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$hashFormat = "$2y$07$";
$salt = "kjkdhujewhgjkjajnknj24";
$concat = $hashFormat . $salt;
echo $password;
echo "<br>";
echo crypt($password, $concat);

require('includes/footer.php'); ?>