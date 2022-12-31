<?php include "headerAdmin.php" ?>
    <div class="container mt-5">
        <div class="row tm-content-row">
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-products">
                    <div class="tm-product-table-container">
                        <table class="table table-hover tm-table-small tm-product-table">
                            <thead>
                            <tr>
                                <th scope="col">&nbsp;</th>
                                <th scope="col">PRODUCT NAME</th>
                                <th scope="col">UNIT SOLD</th>
                                <th scope="col">IN STOCK</th>
                                <th scope="col">EXPIRE DATE</th>
                                <th scope="col">DELETE</th>
                                <th scope="col">EDIT</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($products as $product) { ?>
                                <tr>
                                    <th scope="row"><input type="checkbox"/></th>
                                    <td class="tm-product-name"><?= $product->title ?></td>
                                    <td>$ <?= number_format($product->price) ?></td>
                                    <?php
                                    $conn = mysqli_connect("localhost","root","","shop_x");
                                    $sql_categories = mysqli_query($conn,"SELECT * FROM `categories` WHERE id = '$product->category_id'");
                                    while ($row = mysqli_fetch_array($sql_categories) )   {?>
                                    <td ><?= $row["title"] ?></td>
                                    <?php }?>
                                    <td><?= $product->create_time ?></td>
                                    <td>
                                        <a href="delete-product.php?id=<?= $product->id ?>" class="tm-product-delete-link" onclick="deleteFunction()">
                                            <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="edit-product.php?id=<?= $product->id ?>" class="tm-product-delete-link">
                                            <i class="far fa-edit-alt tm-product-edit-icon"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- table container -->
                    <a href="add-product.php" class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>
                    <button class="btn btn-primary btn-block text-uppercase">Delete selected products
                    </button>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
                    <h2 class="tm-block-title">Product Categories</h2>
                    <div class="tm-product-table-container">
                        <table class="table tm-table-small tm-product-table">
                            <tbody>
                            <?php
                            $conn = mysqli_connect("localhost","root","","shop_x");
                            $sql_categories = mysqli_query($conn,"SELECT * FROM `categories` ");
                            while ($row = mysqli_fetch_array($sql_categories) )   {?>
                            <tr>
                                <td class="tm-product-name"><?= $row["title"] ?></td>
                                <td class="text-center">
                                    <a href="#" class="tm-product-delete-link">
                                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php  }?>
                            </tbody>
                        </table>
                    </div>
                    <!-- table container -->
                    <button class="btn btn-primary btn-block text-uppercase mb-3">
                        Add new category
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php include "footerAdmin.php" ?>