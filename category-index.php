<?php

include "vendor/autoload.php";

use classes\Category;

$category = new Category();
$items = $category->all();

?>


<?php include "components/admin-header.php" ?>

<h1 class="mb-3">List of Category</h1>

<a href="category-create.php" class="mb-3">+ New Category</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($items as $category): ?>
            <tr>
                <td><?php echo $category['id'] ?></td>
                <td><?php echo $category['title'] ?></td>
                <td>
                    <a href="category-edit.php?id=<?php echo $category['id'] ?>">Edit</a>
                    <a href="category-delete.php?id=<?php echo $category['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include "components/admin-footer.php" ?>