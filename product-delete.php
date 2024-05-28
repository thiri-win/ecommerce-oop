<?php

include 'vendor/autoload.php';

use classes\Product;

$id = $_GET['id'];

$product = new Product();
$product->delete($id);

header("location: product-index.php");