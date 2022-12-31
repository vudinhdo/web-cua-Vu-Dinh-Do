<?php include "Views/layouts/header.php" ?>

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Check Our Products</h2>
                        <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Latest Products</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product) { ?>
                    <div class="col-lg-4">

                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="/get-detailProduct.php?id=<?= $product->id ?>"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.php"><i class="fa fa-star"></i></a></li>
                                        <li><a href="/add-product.php?id=<?= $product->id ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="<?= $product->thumbnail ?>" alt="">
                            </div>
                            <div class="down-content">
                                <h4><?= $product->title ?></h4>
                                <span><?= number_format($product->price) ?> vnd</span>
    <!--                                <ul class="stars">-->
    <!--                                    <li><i class="fa fa-star"></i></li>-->
    <!--                                    <li><i class="fa fa-star"></i></li>-->
    <!--                                    <li><i class="fa fa-star"></i></li>-->
    <!--                                    <li><i class="fa fa-star"></i></li>-->
    <!--                                    <li><i class="fa fa-star"></i></li>-->
    <!--                                </ul>-->
                            </div>
                        </div>

                    </div>
                <?php } ?>

            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->

<?php include "Views/layouts/footer.php" ?>