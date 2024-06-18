<?php

include '../vendor/autoload.php';

use classes\Cart;

$user_id = $_COOKIE['user_id'];
$product_id = $_POST['product_id'];
$price = $_POST['product_price'];
$qty = 1;
$total = $price * $qty;

$cart = new Cart();
if (!$cart->checkProduct($user_id, $product_id)) {
    $cart->store([
        'user_id' => $user_id,
        'product_id' => $product_id,
        'price' => $price,
        'qty' => $qty,
        'total' => $total,
    ]);
}
header('location: ../index.php');
