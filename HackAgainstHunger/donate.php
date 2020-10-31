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
        <title>Donations</title>
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
                        $id=0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT amount AS Amount FROM donate WHERE user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) 
                                {
                                    $id.= 1;
                                    echo "<tr><td>" . 1 . "</td><td>Donations for our Organization" . "</td><td>Rs. " . $row["Amount"] ."</td><td><a href='donate-remove.php?id={$id}' class='remove_item_link'> Remove</a></td></tr>";
                                }
                                echo "<tr><td></td><td></td><td></td><td><a href='donate-success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "You din't have any pending donations yet";
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
