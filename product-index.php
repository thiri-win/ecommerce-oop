<?php

use classes\Product;

include "vendor/autoload.php";

$results = new Product();
$products = $results->all();

?>

<?php include 'components/admin-header.php' ?>

<a href="product-create.php">+ New Proudct</a>

<table class="table table-sm">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($products as $product): ?>
        <tr class="align-middle">
            <td><?= $product['id'] ?></td>
            <td><?= $product['name'] ?></td>
            <td><?= $product['price'] ?></td>
            <td><img src="<?= $product['image'] ?>" alt="" height="100"></td>
            <td>
                <a href="product-edit.php?id=<?= $product['id'] ?>">Edit</a>
                <a href="product-delete.php?id=<?= $product['id'] ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include 'components/admin-footer.php' ?>