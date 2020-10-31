<?php

function donate_amount($user_id) {
    $user_id = $_SESSION['user_id']; 
    require("includes/common.php");
    $query = "SELECT * FROM donate WHERE user_id ='$user_id' and status='Added to cart'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    
    if (mysqli_num_rows($result) >= 1) {
        return 1;
    } else {
        return 0;
    }
}

?>

