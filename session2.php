<?php require('includes/header.php');

session_start();
echo $_SESSION['user'];

require('includes/footer.php'); ?>