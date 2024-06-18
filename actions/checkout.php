<?php

include "../vendor/autoload.php";

use classes\Checkout;

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$user_id = $_COOKIE['user_id'];

$checkout = new Checkout();
$checkout->store([
    'name' => $name,
    'email' => $email,
    'address' => $address,
    'user_id' => $user_id,
]);

setcookie('user_id', $user_id, time()-1, '/ecommerce-oop');

header("location: ../index.php");
