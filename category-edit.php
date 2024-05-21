<?php

include "vendor/autoload.php";

use classes\Category;

$id = $_GET['id'];

$items = new Category();
$category = $items->find($id);

?>

<?php include "components/admin-header.php" ?>

<h1 class="mb-5">Update Category</h1>

<form action="actions/category-update.php" method="post">

    <?php if(isset($_GET['error'])): ?>
    <div class="alert alert-danger">Please Enter All Fields.</div>
    <?php endif; ?>

    <input type="hidden" name="id" value="<?= $category->id ?>">
    <input type="text" name="title" placeholder="Enter Category Title ..." class="form-control mb-3" autofocus value="<?= $category->title?>">
    <input type="submit" value="Update" class="btn btn-outline-primary mb-3">

</form>

<?php include "components/admin-footer.php" ?>