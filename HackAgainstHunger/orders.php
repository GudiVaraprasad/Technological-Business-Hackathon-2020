<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Orders</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Custom CSS -->
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid" id="content">
            <?php include 'includes/header.php'; ?>
            <div class="row decor_bg">
                <div class="col-md-8 col-md-offset-2">
                    <table class="table table-striped">
                        <?php
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price,users_items.quantity AS Quantity, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Confirmed'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Cost</th>
                                    <th>Quantity</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) 
                                {
                                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs. " . $row["Price"] . "</td><td>".$row["Quantity"]."</td><td>Rs. ".$row["Price"]*$row["Quantity"]."</td></tr>";
                                }
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "You din't have any orders";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>

