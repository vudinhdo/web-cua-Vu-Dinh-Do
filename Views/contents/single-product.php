<?php include "Views/layouts/header.php" ?>

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Single Product Page</h2>
                        <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product">

            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="left-images">
                            <img src="../../public/assets/images/img_products/<?= $product->thumbnail ?>" alt="man">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="right-content">
                            <h4><?= $product->title ?></h4>
                            <span class="price"><?= number_format($product->price) ?></span>
<!--                            <ul class="stars">-->
<!--                                <li><i class="fa fa-star"></i></li>-->
<!--                                <li><i class="fa fa-star"></i></li>-->
<!--                                <li><i class="fa fa-star"></i></li>-->
<!--                                <li><i class="fa fa-star"></i></li>-->
<!--                                <li><i class="fa fa-star"></i></li>-->
<!--                            </ul>-->

                            <div class="quote">
                                <i class="fa fa-quote-left"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuski smod.</p>
                            </div>
                            <div class="quantity-content">
                                <div class="left-content">
                                    <h6>No. of Orders</h6>
                                </div>
                                <div class="right-content">
                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus">
                                        <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" >
                                        <input
                                                type="button" value="+" class="plus">
                                    </div>
                                </div>
                            </div>
                            <div class="total">
                                <h4>Total: <?= number_format(($product->price) * 3) ?></h4>
                                <div class="main-border-button"><a href="/add-product.php?id=<?= $product->id ?>">Add To Cart</a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>
    <!-- ***** Product Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
<?php include "Views/layouts/footer.php" ?>