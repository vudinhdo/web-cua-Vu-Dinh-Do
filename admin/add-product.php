<?php include "headerAdmin.php" ?>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "Shop_X";
$conn = mysqli_connect($hostname, $username, $password, $database);
mysqli_set_charset($conn, "utf8mb4");
if (isset($_POST["addP"])) {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $thumbnail = $_FILES["thumbnail"]["name"];
    $price = $_POST["price"];
    $amount = $_POST["amount"];
    $category_id = $_POST["category_id"];
    $create_time = $_POST["create_time"];
    $update_time = $_POST["update_time"];
    $path = "../public/assets/images/img_products/";
    $thumbnail_tmp = $_FILES["thumbnail"]["tmp_name"];
    $sql = mysqli_query($conn, "INSERT INTO products( title , thumbnail , description , price,amount , category_id , create_time , update_time ) VALUES ('$title','$thumbnail','$description','$price','$amount','$category_id','$create_time','$update_time')");
    move_uploaded_file($thumbnail_tmp, $path . $thumbnail);
}

?>
    <div class="container tm-mt-big tm-mb-big">
        <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Add Product</h2>
                        </div>
                    </div>
                    <div class="row tm-edit-product-row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <form action="" method="post" enctype="multipart/form-data" class="tm-edit-product-form">
                                <div class="form-group mb-3">
                                    <label for="name">Product Name</label>
                                    <input id="name" name="title" type="text" class="form-control validate"/>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="description">Description</label>
                                    <textarea class="form-control validate" name="description" rows="3"
                                              required></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="category">Category</label>

                                    <select class="custom-select tm-select-accounts" id="category" name="category_id">
                                        <option selected>Select category</option>
                                        <?php
                                        $conn = mysqli_connect("localhost", "root", "", "shop_x");
                                        $sql_categories = mysqli_query($conn, "SELECT * FROM `categories`");
                                        while ($row = mysqli_fetch_array($sql_categories)) {
                                            ?>
                                            <option value="<?= $row['id'] ?>"><?= $row["title"] ?></option>
                                        <?php } ?>
                                    </select>

                                </div>
                                <div class="form-group mb-3">
                                    <label for="name">Price</label>
                                    <input id="name" name="price" type="number" class="form-control validate" required/>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="name">Amount</label>
                                    <input id="name" name="amount" type="number" class="form-control validate" required/>
                                </div>
                                <div class="row">
                                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                                        <label for="expire_date">create time</label>
                                        <input id="expire_date" name="create_time" type="date"
                                               class="form-control validate" data-large-mode="true"/>
                                    </div>
                                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                                        <label for="stock">update time</label>
                                        <input id="stock" name="update_time" type="date" class="form-control validate"
                                               required/>
                                    </div>
                                </div>

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                            <div class="tm-product-img-dummy mx-auto">
                                <i class="fas fa-cloud-upload-alt tm-upload-icon" name="thumbnail"
                                   onclick="document.getElementById('fileInput').click();"></i>
                            </div>
                            <div class="custom-file mt-3 mb-3">
                                <input id="fileInput" name="thumbnail" type="file" style="display:none;"/>
                                <input type="button" name="thumbnail" class="btn btn-primary btn-block mx-auto"
                                       value="UPLOAD PRODUCT IMAGE"
                                       onclick="document.getElementById('fileInput').click();"/>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block text-uppercase" name="addP">Add
                                Product Now
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "footerAdmin.php" ?>