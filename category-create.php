<h1 class="mb-5">Category</h1>

<form action="actions/category-store.php" method="post">
    <?php if(isset($_GET['error'])): ?>
    <div class="alert alert-danger">Please Enter All Fields.</div>
    <?php endif; ?>
    <input type="text" name="title" placeholder="Enter Category Title ..." class="form-control mb-3" autofocus>
    <input type="submit" value="Submit" class="btn btn-outline-primary mb-3">
</form>