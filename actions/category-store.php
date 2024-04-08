<?php

use classes\Category;

include '../vendor/autoload.php';

$title = addslashes($_POST['title']);

if(empty($title)) {
    header('location: ../admin.php?error=1');
} else {
    $category = new Category();
    $category->store([
        'title' => $title
    ]);
    header('location: ../admin.php');
}