<?php

require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $user_id = $_SESSION['user_id'];
    $query = "DELETE FROM donate WHERE  user_id='$user_id'and status='Added to cart'";
    $res = mysqli_query($con, $query) or die($mysqli_error($con));
    header("location:donate.php");
}
?>