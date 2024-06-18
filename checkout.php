<?php include 'components/header.php'; ?>

<div class="container p-3">
    <h1>Checkout Your Prouducts</h1>

    <form action="actions/checkout.php" method="post">
        <div class="mb-3">
            <label for="name">Name:</label>
            <input type="text" class="form-control" placeholder="Enter Your Name" name="name">
        </div>
        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
        </div>
        <div class="mb-3">
            <label for="address">Address:</label>
            <textarea name="address" placeholder="Your Address" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Checkout</button>
        </div>

    </form>
</div>


<?php include 'components/footer.php'; ?>
