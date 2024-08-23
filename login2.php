<?php require('includes/header.php');

echo "DB Info:";
$dbUserInput = 'pritam';
$dbPasswordInput = '123456';
echo "<br>";

echo $dbUserInput;
echo "<br>";
echo $dbPasswordInput;
echo "<hr>";

echo "User Info:";
$userInput = $_REQUEST['userInput'];
$passwordInput = $_REQUEST['passwordInput'];
echo "<br>";

echo $userInput;
echo "<br>";
echo $passwordInput;
echo "<hr>";

echo "Login Info:";
echo "<br>";
if ($dbUserInput == $userInput && $dbPasswordInput == $passwordInput) {
    echo "<h3 style='color: green'> Login Success. </h3>";
} else {
    echo "<h3 style='color: red'> Login Failed. </h3>";
}

require('includes/footer.php'); ?>