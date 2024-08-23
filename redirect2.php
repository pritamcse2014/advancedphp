<?php require('includes/header.php');

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

echo $username;
echo "<br>";
echo $password;
echo "<hr>";

if ($username == 'google' && $password == "123456") {
    header('location: https://www.google.com/');
} else if ($username == 'facebook' && $password == "654321") {
    header('location: https://www.facebook.com/');
} else if ($username == 'pritam' && $password == "123") {
    header("location: redirect3.php?redirect=$username");
} else {
    echo "You Don't Redirect.";
}

require('includes/footer.php'); ?>