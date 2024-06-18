<?php

include 'vendor/autoload.php';

use classes\Cart;
use classes\Product;

$items = new Product();
$products = $items->all();

$carts = new Cart();
$count = $carts->count($_COOKIE['user_id']);

if (!isset($_COOKIE['user_id'])) {
    setcookie('user_id', md5(rand()), time() + 60 * 60 * 24, 'localhost/ecommerce-oop');
}
?>

<?php include 'components/header.php'; ?>

<!-- shop section -->
<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Latest Products
            </h2>
        </div>
        <a href="checkout.php" class="btn btn-outline-primary">
            <span>Your Cart</span>
            <span class="badge bg-primary text-white"><?= $count ?></span>
        </a>
        <div class="row">
            <?php foreach($products as $product): ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="box">
                    <a href="">
                        <div class="img-box">
                            <img src="<?= $product['image'] ?>" alt="">
                        </div>
                        <div class="detail-box">
                            <h6><?= $product['name'] ?></h6>
                            <h6>Price
                                <span><?= $product['price'] ?></span>
                            </h6>
                        </div>
                        <div class="border text-center p-2 bg-white rounded mt-2">

                            <?php if(isset($count) && $carts->checkProduct($_COOKIE['user_id'], $product['id'])): ?>
                                <form action="actions/cart-delete.php" method="post">
                                    <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                                    <button type="submit" class="btn btn-danger">Remove form Cart</button>
                                </form>
                            <?php else: ?>
                            <form action="actions/cart-store.php" method="post">
                                <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                                <input type="hidden" name="product_price" value="<?= $product['price'] ?>">
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-cart-arrow-down"></i> 
                                    Add to Cart
                                </button>
                            </form>
                            <?php endif; ?>
                        </div>
                        <div class="new">
                            <span>New</span>
                        </div>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="btn-box">
            <a href="#">
                View All Products
            </a>
        </div>
    </div>
</section>

<!-- end shop section -->


<?php include 'components/footer.php'; ?>
