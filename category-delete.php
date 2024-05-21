<?php

include "vendor/autoload.php";

use classes\Category;

$id = $_GET['id'];

$category = new Category();
$category->delete($id);

header("location: category-index.php");