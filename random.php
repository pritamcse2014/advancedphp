<?php require('includes/header.php') ?>

<?php
    $all_keys = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '+', '=', '-', ':', ';', '?', '.', ',', ',', ' ');

    $length = array(8, 9, 10, 11, 12, 13, 14, 15);
    shuffle($length);
    // echo $length[0];
    $finalLength = $length[0];
    echo "<br>";
    echo "Password Length is : $finalLength";
    echo "<br>";
    $str = "";

    for ($i=0; $i < $finalLength; $i++) { 
        shuffle($all_keys);
        echo "$all_keys[0]";
        echo "<br>";
        $str .= $all_keys[0];
        echo "Your Random Password is : $str";
    }
    echo "<br>";
    echo "Your Random Password Two is : $str";
?>

<?php require('includes/footer.php') ?>