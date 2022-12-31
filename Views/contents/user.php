<?php include "Views/layouts/header.php" ?>
<?php
$conn = mysqli_connect("localhost", "root", "", "Shop_X");
mysqli_set_charset($conn, "utf8mb4");
$sql_user = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
while ($row = mysqli_fetch_array($sql_user)) {
    ?>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-12 col-xl-4">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body text-center">
                            <div class="mt-3 mb-4">
                                <img src="../../public/assets/images/<?= $row['avatar'] ?>"
                                     class="rounded-circle img-fluid" style="width: 100px;" alt="ảnh của <?= $row['username'] ?>"/>
                            </div>
                            <h4 class="mb-2"><?= $row['username'] ?></h4>
                            <p class="text-muted mb-4">@Programmer <span class="mx-2">|</span> <a
                                        href="#!"><?= $row['email'] ?></a></p>
                            <div class="mb-4 pb-2">
                                <button type="button" class="btn btn-outline-primary btn-floating">
                                    <i class="fa-brands fa-facebook"></i>
                                </button>
                                <button type="button" class="btn btn-outline-primary btn-floating">
                                    <i class="fa-brands fa-twitter"></i>
                                </button>
                                <button type="button" class="btn btn-outline-primary btn-floating">
                                    <i class="fa-brands fa-square-instagram"></i>
                                </button>
                            </div>
                            <button type="submit" class="btn btn-primary btn-rounded btn-lg">
                                <a href="/logout.php" style="color: white"> LOGOUT </a>
                            </button>
                            <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                <div>
                                    <p class="mb-2 h5">8471</p>
                                    <p class="text-muted mb-0">Wallets Balance</p>
                                </div>
                                <div class="px-3">
                                    <p class="mb-2 h5">8512</p>
                                    <p class="text-muted mb-0">Income amounts</p>
                                </div>
                                <div>
                                    <p class="mb-2 h5">4751</p>
                                    <p class="text-muted mb-0">Total Transactions</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <?php

}
?>
<?php include "Views/layouts/footer.php" ?>
