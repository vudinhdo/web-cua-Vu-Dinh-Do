<?php include "Views/layouts/header.php" ?>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "Shop_X";
$conn = mysqli_connect($hostname, $username, $password, $database);
mysqli_set_charset($conn, "utf8mb4");

?>
<div class="page-heading about-page-heading" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>Check Out</h2>
                    <span>Trang thanh toán sản phẩm</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="float-left " style="width: 50%">
        <h3>Vui lòng điền thông tin nhận hàng</h3>
        <br>
        <form>
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Last name">
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2">
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <br>
    </div>

    <div class="float-right text-center"  style="width: 40%">
        <h4>cart</h4>
        <br>
        <table class="table table-bordered">

            <thead>
            <tr>
                <th scope="col">stt</th>
                <th scope="col">thumbnail</th>
                <th scope="col">name</th>
                <th scope="col">quantity</th>
                <th scope="col">price</th>
            </tr>
            </thead>


            <tbody>
            <?php
            $t = 0;
            foreach ($items as $index => $item) {
            $t += ($item->product->price) * ($item->quantity);

                ?>
                <tr>
                    <th scope="row"><?= $index + 1 ?></th>
                    <td><img src="../../public/assets/images/img_products/<?= $item->product->thumbnail ?>"
                             alt="<?= $item->id ?>"
                             style="width: 5em"></td>
                    <td><?= $item->product->title ?></td>
                    <td><?= $item->quantity ?> </td>
                    <td>$ <?= number_format(($item->product->price) * ($item->quantity)) ?></td>
                </tr>
            <?php } ?>
            <tr>
                <th>Tổng tiền </th>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>$ <?= number_format($t) ?></td>
                <td>&nbsp;</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>


