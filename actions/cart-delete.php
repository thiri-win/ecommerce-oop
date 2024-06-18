<?php

include "../vendor/autoload.php";

use classes\Cart;

$user_id = $_COOKIE['user_id'];
$product_id = $_POST['product_id'];
$cart = new Cart();
$cart->delete($user_id, $product_id);
header('location: ../index.php');