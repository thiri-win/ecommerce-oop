<?php include "components/admin-header.php" ?>

<h1 class="mb-5">Category</h1>

<form action="actions/category-store.php" method="post">

    <?php include "components/error.php"?>

    <input type="text" name="title" placeholder="Enter Category Title ..." class="form-control mb-3" autofocus>
    <input type="submit" value="Submit" class="btn btn-outline-primary mb-3">
    
</form>

<?php include "components/admin-footer.php" ?>
