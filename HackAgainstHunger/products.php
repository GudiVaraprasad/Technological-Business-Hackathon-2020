<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--Get your own code at fontawesome.com-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Custom CSS -->
        <link href="style.css" rel="stylesheet">
    </head>

    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        include 'added.php';
        ?>
        <div class="container" id="content">
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <center><h1>HACK AGAINST HUNGER</h1>
            </div>
            <hr>
            <div id="events">
            <h1>Our Programs and Events: </h1>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/techfest.png" alt="" style="height:290px;">
                        <div class="caption">
                            <h3>Technical Fest</h3>
                            <p>This fest is an opportunity for the techies to gets their hands busy. This program we offer have several competition and the winners will be rewarded. It has an entry fee of ₹ 150 , which will be used to buy a meal for several poor. </p>
                            <p>Price: Rs.150.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Register</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(1)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Tickets:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity1" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=1&quantity='+document.getElementById('quantity1').value" name="add" value="add" class="btn btn-block btn-primary buy">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/homefarm.jpg" alt="" style="height:290px;width:400px;">
                        <div class="caption">
                            <h3>Home Farm Events</h3>
                            <p>We encourage and help people to grow good amont of fruits and vegetables in their house. It is a program to help the world to reach it's goal of fresh and nutritious food. </p>
                            <p style="padding-top:20px;">Price:FREE </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Register</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(2)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Tickets:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity2" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=2&quantity='+document.getElementById('quantity2').value" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>       
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/midday.jpg" alt="">
                        <div class="caption">
                            <h3>Mid-Day Meal</h3>
                            <p>This is a program to ensure that kids in the school who cannot afford a single meal will be provided with nutritious food everyday during the lunch hour in the school by our team.</p>
                            <p>NOTE: Registrations are only for schools</p>
                            <p>Price: FREE</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Register</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(3)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Children:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity3" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=3&quantity='+document.getElementById('quantity3').value" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="watches">
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/fridayfarm.png" alt="" style="height:290px;width:400px;">
                        <div class="caption">
                            <h3>Friday Farming</h3>
                            <p>This event is something that gets all of us close to the farmer. Join us on every Friday on the webinar and we will introduce you to a farmer. We shall listen to his story and appreciate the amount of hard work he puts in giving us food. This event will encourage all of us not to waste the food. We will also learn to farm in home, protect fields,use treated faecal waste ,manage risks from water irrigation to keep harvest and storage equipment clean and dry.</p>
                            <p>Price:FREE </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Register</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(4)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Tickets:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity4" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=4&quantity='+document.getElementById('quantity4').value" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/child.jpg" alt=""  style="height:290px;width:400px;">
                        <div class="caption">
                            <h3>Child Immunization Initiative</h3>
                            <p style="padding-top:20px;">This helps in overall development of children below 6 years of age, and also expectant women bearing a child. It aims to provide supplementary feeding, immunization, vaccines to prevent malnutrition causing deficiencies. Our scheme focuses on the marginalized section of society as well, by raising awareness about health and wellness, thereby aiming to eradicate hunger issues in frequently hit famine regions.</p>
                            <p>Price: FREE </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Register</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(5)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Quantity:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity5" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=5&quantity='+document.getElementById('quantity5').value" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/webinar.jpg" alt="" style="height:290px;width:400px;">
                        <div class="caption">
                            <h3>AAA initiative webinar</h3>
                            <p>This initiative focusses on three main features of food sustainability which are Availability, Accessibility and Authority over food resources to alleviate hunger and starvation. Our webinar aims to spread the word to everyone that food resources should be accessible to all groups of people, people should have equal rights and authority to access it and also food shall be made available anytime of the day to everyone.</p>
                            <p style="padding-top:20px;">Price:FREE </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Register</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(6)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Tickets:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity6" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=6&quantity='+document.getElementById('quantity6').value" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
              <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/coronarelief.png" alt="" style="height:290px;width:400px;">
                        <div class="caption">
                            <h3>Corona Relief</h3>
                            <p>HackAgainstHunger is providing food to the needy in this crisis hour. Many can't cook for themselves when affected with corona, nor can they go out to purchase groceries.  We help them by serving food each and every day until they recover. We ensure that the food is doctor certified. We also serve the one day work labourers who lost their livelihood due to covid. Most importantly , we serve the front liners who put their life at risk for nation.</p>
                            <p>Price:FREE </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Register</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(14)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Number of people:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity14" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=14&quantity='+document.getElementById('quantity14').value" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/blockchain.jpg" alt="" style="height:290px;width:400px;">
                        <div class="caption">
                            <h3>No Block in the Chain </h3>
                            <p>To serve the needy and poor is a chain. There is always a medium between the needy and the needful. Our organization is providing a block free chain through block chain technology,  where we are just platform providers. We provide  you with a blockchain service that supports donations and financial transactions to transfer directly to the receiver irrespective of involvement of the middle man.</p>
                            <p style="padding-top:20px;">Price:FREE </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Register</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(15)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Number of people:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity15" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=15&quantity='+document.getElementById('quantity15').value" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div id="money">
            <h1>Donate Money: </h1>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/nutritious.png" alt="" style="height:300px;width:400px;">
                        <div class="caption">
                            <h3>Providing Nutritious Food to Newly Born Children</h3>
                            <p>Price: Rs. 100.00 per child </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Donate</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(7)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Quantity:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity7" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=7&quantity='+document.getElementById('quantity7').value" name="add" value="add" class="btn btn-block btn-primary" >Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/dayfood.jpg" alt="" style="height:300px;">
                        <div class="caption">
                            <h3>Responsible for a person's food a day</h3>
                            <p>Price: Rs. 350.00 per person</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Donate</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(8)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Quantity:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity8" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=8&quantity='+document.getElementById('quantity8').value" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/donate.jpg" alt="" style="height:300px;">
                        <div class="caption">
                            <h3>Donate food to a person in your city</h3>
                            <p>Price: Rs. 200.00 per person</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Donate</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(9)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Quantity:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity9" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=9&quantity='+document.getElementById('quantity9').value" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/van.png" alt="" style="height:300px;">
                        <div class="caption">
                            <h3>NOMAD Van Donations</h3>
                            <p style="padding-top:16px;">Price: Rs. 100.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Donate</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(10)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Quantity:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity10" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=10&quantity='+document.getElementById('quantity10').value" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/midday.jpg" alt="" style="height:290px;">
                        <div class="caption">
                            <h3>Mid-Day Meal Donations</h3>
                            <p style="padding-top:25px;">Price: Rs. 100.00 per person</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Donate</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(11)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Quantity:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity11" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=11&quantity='+document.getElementById('quantity11').value" name="add" value="add" class="btn btn-block btn-primary buy">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/child.jpg" alt="" style="height:290px;width:400px;">
                        <div class="caption">
                            <h3>Child Immunization Initiative Donations</h3>
                            <p>Price:300.00 per person</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Donate</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(12)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Quantity:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity12" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=12&quantity='+document.getElementById('quantity12').value" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>       
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/animalfeed.jpg" alt="" style="height:290px;">
                        <div class="caption">
                            <h3>Feed an animal</h3>
                            <p>Price:100.00 for animal</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Donate</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(13)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Quantity:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity13" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=13&quantity='+document.getElementById('quantity13').value" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/logo.png" alt="" style="height:290px;">
                        <div class="caption">
                            <h3>Donations for our Organization</h3>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Donate</a></p>
                                <?php
                            } else {
                                if (donate_amount(1)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>
                                        Amount:Rs.<input id="amount" type="text" name="amount" value=1 style="max-width:20%;" required>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='donate-add.php?id=1&amount='+document.getElementById('amount').value" name="add" value="add" class="btn btn-block btn-primary buy">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                
            </div>
            </div>
            <div id="food">
            <h1>Donate Food:</h1>
              <div class="container">
                  <div class="row text-center">
                  <div class="col-sm-6">
                      <div class="thumbnail">
                          <img src="img/van.png" alt="">
                        <div class="caption">
                            <h3>NOMAD VANS</h3>
                            <p>We provide people who conduct large events an opportunity to donate the left over food from the event. Our nomadic vans will reach you within 15mins of your intimation and collect the food. This food will be served fresh to the poor on the road side , if the quantity is too , we will serve the orphans as well.</p>Contact us to proceed further.
                        </div>
                    </div>    
                  </div>
                  <div class="col-sm-4 col-sm-offset-2">
                      <h2 style="font-size:25px;">Contact Information</h2>
                      <div class="thumbnail" style="color:black;border-color:transparent;">
                      <p class="fa fa-google" style="font-size:20px;">  hackagainsthunger@gmail.com</p><br>
                      <p class="fa fa-phone" style="font-size:20px;">+91 9299299212</p><br>
                      </div>
                      <div class="panel panel-primary" id="locate">
                            <div class="panel-heading">
                                <h4>Bread for Every Breath</h4>
                                <h6>SEND US LOCATION - WE HELP THE NEEDY</h6>
                            </div>
                            <div class="panel-body">
                                <form action="location.php" method="POST">
                                    <div class="form-group">
                                        <input class="form-control" id="name" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Mobile Number" maxlength="10" size="10" name="contact" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input  type="text" id="message" class="form-control"  placeholder="Location" name="location" required = "true">
                                    </div>
                                    <p align="center">Click <a href="products.php#money">here</a> to donate.</p>
                                    <button type="submit" name="submit" class="btn btn-primary">Send</button>
                                </form>
                            </div>
                        </div>
                  </div>
                  </div>
              </div>
            </div>
            <hr>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
<script>
    $(".btn1").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        var newVal = parseFloat(oldValue) + 1;
        $button.parent().find("input").val(newVal);
    });
    $(".btn2").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if (oldValue > 2) {
            var newVal = parseFloat(oldValue) - 1;
        } else {
            newVal = 1;
        }
        $button.parent().find("input").val(newVal);
    });
</script>
</html>
