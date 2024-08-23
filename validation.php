<?php require('includes/header.php') ?>

<form action="validation2.php" method="post">
    <input type="text" name="username" id="username" placeholder="Enter Your Username">
    <input type="email" name="email" id="email" placeholder="Enter Your Email">
    <input type="password" name="password" id="password" placeholder="Enter Your Password">
    <input type="submit" value="submit">
</form>


<!-- System - 3 -->
<?php
    if (isset($_REQUEST['wrongPassword'])) {
        echo $_REQUEST['wrongPassword'];
    }
?>

<?php require('includes/footer.php') ?>