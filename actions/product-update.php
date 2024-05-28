<?php

include "../vendor/autoload.php";

use classes\Product;

$id = $_POST['id'];
$name = trim($_POST['name']);
$category_id = trim($_POST['category_id']);
$price = trim($_POST['price']);
$about = trim($_POST['about']);
$image = $_FILES['image'];

if(empty($name) || empty($category_id) || empty($price) || empty($about)) {

    header("location: ../product-edit.php?error=1&id=".$id);

} else {

    $product = new Product();

    if(is_uploaded_file($image['tmp_name'])) {

        $image_path = "images/".$image['name'];
        move_uploaded_file($image['tmp_name'], "../".$image_path);

        $product->update([
            'id' => $id,
            'name' => $name,
            'category_id' => $category_id,
            'price' => $price,
            'about' => $about,
            'image' => $image_path,
        ]);
    } else {
        $product->update([
            'id' => $id,
            'name' => $name,
            'category_id' => $category_id,
            'price' => $price,
            'about' => $about,
        ]);
    }
    
    header("location: ../product-index.php");
}