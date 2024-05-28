<?php

include "../vendor/autoload.php";

use classes\Product;

$name = trim($_POST['name']);
$category_id = trim($_POST['category_id']);
$price = trim($_POST['price']);
$about = trim($_POST['about']);
$image = $_FILES['image'];

if(empty($name) || empty($category_id) || empty($price) || empty($about) || !is_uploaded_file($image['tmp_name'])) {
    header("location: ../product-create.php?error=1");
} else {
    $image_path = "images/".$image['name'];
    $product = new Product();
    $product->store([
        'name' => $name,
        'category_id' => $category_id,
        'price' => $price,
        'about' => $about,
        'image' => $image_path,
    ]);
    move_uploaded_file($image['tmp_name'], "../".$image_path);
    header("location: ../product-index.php");
}