<?php

include '../vendor/autoload.php';

use classes\Category;

$id = $_POST['id'];
$title = $_POST['title'];

if(empty($title)) {
    header('location: ../category-edit.php?error=1&id='.$id);
} else {
    $category = new Category();
    $category->update([
        'id' => $id,
        'title' => $title
    ]);
    header("location: ../category-index.php");
}