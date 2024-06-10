<?php

include "vendor/autoload.php";

use classes\Product;

$items = new Product();
$products = $items->all();

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
                            <h6 class="mb-0"><i class="fas fa-cart-arrow-down"></i> Add to Cart</h6>
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
