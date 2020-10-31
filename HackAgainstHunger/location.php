<?php
require("includes/common.php");
    $name = $_POST['name'];
    $phone=$_POST['contact'];
    $location = $_POST['location'];
    $query = "INSERT INTO location(name,phone,location) VALUES('$name','$phone','$location')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: products.php#locate');
?> 


