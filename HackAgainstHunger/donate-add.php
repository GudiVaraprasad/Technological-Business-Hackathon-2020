<?php
require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $amount=$_GET['amount'];
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO donate(user_id,amount,status) VALUES('$user_id','$amount','Added to cart')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: products.php');
}
?>   
