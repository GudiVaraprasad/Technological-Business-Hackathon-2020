<?php
require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $quantity=$_GET['quantity'];
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO users_items(user_id, item_id, status,quantity) VALUES('$user_id', '$item_id', 'Added to cart','$quantity')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: products.php');
}
?>   
