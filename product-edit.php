<?php

include 'vendor/autoload.php';
use classes\Category;
use classes\Product;

$result = new Category();
$categories = $result->all();

$product_id = $_GET['id'];
$product = new Product();
$item = $product->find($product_id);

?>

<?php include "components/admin-header.php" ?>

<h1>Update Proudct</h1>
<form action="actions/product-update.php" method="post" enctype="multipart/form-data">
    
    <?php include "components/error.php" ?>

    <input type="text" name="name" placeholder="product name" class="form-control mb-3" value="<?= $item->name ?>">

    <select name="category_id" id="category_id" class="form-control mb-3">
        <?php foreach($categories as $category): ?>
        <option 
            value="<?= $category['id'] ?>" 
            <?= $category['id'] == $item->category_id ? "selected" : ""; ?>
            >
            <?= $category['title'] ?></option>
        <?php endforeach; ?>
    </select>
    
    <input type="hidden" name="id" value="<?= $item->id ?>">
    <input type="number" name="price" placeholder="price" class="form-control mb-3" value="<?= $item->price ?>">
    <textarea name="about" id="about" class="form-control mb-3" placeholder="about the product"><?= $item->about ?></textarea>
    <input type="file" name="image" class="form-control mb-3">
    <img src="<?= $item->image ?>" alt="" height="300" class="d-block mb-3">
    <button type="submit" class="btn btn-outline-warning">Update</button>

</form>

<?php include "components/admin-footer.php" ?>