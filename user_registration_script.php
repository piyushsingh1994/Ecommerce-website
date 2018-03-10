<?php

$con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
$email_id = $_POST['email_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$Phone = $_POST['Phone'];
$user_registration_query = "insert into users(email_id, first_name, last_name, Phone) values ('$email_id', '$first_name', '$last_name', '$Phone')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully inserted";
?>
