<?php
$con = mysqli_connect("localhost:3306", "root", "", "hack")or die($mysqli_error($con));
if(!isset($_SESSION))
{
    session_start();
}
?>