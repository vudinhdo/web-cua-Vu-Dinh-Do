<?php include "Views/layouts/header.php" ?>
<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "Shop_X";
$conn = mysqli_connect($hostname, $username, $password, $database);
mysqli_set_charset($conn, "utf8mb4");

if (isset($_GET["reload"])){
    $id = $_GET["id"];
    $quantity = $_GET["quantity"];
    $sql = mysqli_query($conn,"UPDATE items SET quantity = '$quantity' WHERE id='$id' ");   
}

?>
    <div class="page-heading about-page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Cart</h2>
                        <span>Awesome, clean &amp; creative HTML5 Template</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container ">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Stt</th>
                <th scope="col">thumbnail</th>
                <th scope="col">name</th>
                <th scope="col">quantity</th>
                <th scope="col">price</th>
                <th scope="col">Action</th>
            </tr>
            </thead>

            <tbody>
            <?php
            $t = 0;
            foreach ($items as $index => $item) {
                $t += ($item->product->price) * ($item->quantity)
                ?>
                <tr>
                    <th scope="row"><?= $index + 1 ?></th>
                    <td><img src="../../public/assets/images/img_products/<?= $item->product->thumbnail ?>"
                             alt="<?= $item->id ?>"
                             style="width: 5em"></td>
                    <td><?= $item->product->title ?></td>
                    <td>
                        <form action="" method="get">
<!--                            <button class="btn btn-link px-2" name="minusQty"-->
<!--                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">-->
<!--                                <ion-icon name="remove-outline"></ion-icon>-->
<!--                            </button>-->
                            <input type="number" alt="<?= $item->id ?>" name="quantity" min="1" value="<?= $item->quantity  ?>"
                                   class="w-25 text-center">
<!--                            <button class="btn btn-link px-2" name="plusQty"-->
<!--                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">-->
<!--                                <ion-icon name="add-outline"></ion-icon>-->
<!--                            </button>-->
                            <button type="submit" class="btn btn-link px-2" name="reload">
                                <ion-icon name="reload-circle-outline"></ion-icon>
                            </button>
                        </form>
                    </td>
                    <td>$ <?= number_format(($item->product->price) * ($item->quantity)) ?></td>
                    <td>
                        <ion-icon name="trash-outline" size="large" style="margin-left: 30%"></ion-icon>
                    </td>
                </tr>
            <?php } ?>
            <tr>
                <th>&nbsp;</th>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>$ <?= number_format($t) ?></td>
                <td>&nbsp;</td>
            </tr>
            </tbody>
        </table>
        <div>
            <a href="/get-check-out.php">check out</a>
        </div>
    </div>

<?php include "Views/layouts/footer.php" ?>