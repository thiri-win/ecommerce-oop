<?php

include 'vendor/autoload.php';
use classes\Category;

$result = new Category();
$categories = $result->all();

?>

<?php include "components/admin-header.php" ?>

<h1>New Proudct</h1>
<form action="actions/product-store.php" method="post" enctype="multipart/form-data">
    
    <?php include "components/error.php" ?>

    <input type="text" name="name" placeholder="product name" class="form-control mb-3">
    <select name="category_id" id="category_id" class="form-control mb-3">
        <?php foreach($categories as $category): ?>
        <option value="<?= $category['id'] ?>"><?= $category['title'] ?></option>
        <?php endforeach; ?>
    </select>
    <input type="number" name="price" placeholder="price" class="form-control mb-3">
    <textarea name="about" id="about" class="form-control mb-3" placeholder="about the product"></textarea>
    <input type="file" name="image" class="form-control mb-3">
    <button type="submit" class="btn btn-outline-primary">Add</button>

</form>

<?php include "components/admin-footer.php" ?>