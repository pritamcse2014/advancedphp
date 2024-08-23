<?php require('includes/header.php') ?>

<?php
    $name = "user";
    $value = "pritam";
    setcookie($name, $value, time()+20);
    if (isset($_COOKIE['user'])) {
        echo "Saved Cookie is : {$_COOKIE['user']}";
    } else {
        echo "Cookie is not Set";
    }
?>

<?php require('includes/footer.php') ?>