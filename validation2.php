<?php require('includes/header.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// echo strlen($password);
$countPassword = strlen($password);
// echo $countPassword;

// System - 1
// if ($countPassword >= 5 && $countPassword <= 10) {
//     echo "Perfect";
// } else {
//     echo "Wrong";
// }

// System - 2
// if (($countPassword >= 5 && $countPassword <= 10) == false) {
//     echo "Wrong";
// } else {
//     echo "Perfect";
// }

// System - 3
if (!($countPassword >= 5 && $countPassword <= 10)) {
    // echo "Wrong";
    // header("location: validation.php");
    header("location: validation.php?wrongPassword=Your Entered Password is: $password.");
} else {
    echo "Perfect.";
}

require('includes/footer.php'); ?>