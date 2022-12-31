<?php
ob_start();
session_start();
if ($_SESSION["username"] == null) {
    header("location: /index.php");
}else{
    $username = $_SESSION["username"];
    $email = $_SESSION["email"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <title>Hexashop vdd</title>
    <link rel="shortcut icon" href="../../public/assets/images/title.jpg">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/font-awesome.css">
    <link rel="stylesheet" href="../../public/assets/css/templatemo-hexashop.css">
    <link rel="stylesheet" href="../../public/assets/css/owl-carousel.css">
    <link rel="stylesheet" href="../../public/assets/css/lightbox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />

    <style>
        .div-check-out-left {
            text-align: center;
            background-color: pink;
            width: 60%;
            float: left;
        }

        .div-check-out-right {
            text-align: center;
            background-color: black;
            width: 40%;
            float: right;
        }
    </style>

</head>

<body>

<!-- ***** Preloader Start ***** -->
<!--<div id="preloader">-->
<!--    <div class="jumper">-->
<!--        <div></div>-->
<!--        <div></div>-->
<!--        <div></div>-->
<!--    </div>-->
<!--</div>-->
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/home.php" class="logo">
                        <img src="../../public/assets/images/logo.png" alt="...">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="/home.php" class="active">Home</a></li>
                        <li class="scroll-to-section"><a
                                    href="<?= "https://" . $_SERVER["HTTP_HOST"] . "/category.php?id=1" ?>">Men's</a>
                        </li>
                        <li class="scroll-to-section"><a
                                    href="<?= "https://" . $_SERVER["HTTP_HOST"] . "/category.php?id=2" ?>">Women's</a>
                        </li>
                        <li class="scroll-to-section"><a
                                    href="<?= "https://" . $_SERVER["HTTP_HOST"] . "/category.php?id=3" ?>">Kid's</a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:;">Pages</a>
                            <ul>
                                <li><a href="/get-about.php">About Us</a></li>
                                <li><a href="/get-product.php">Products</a></li>
                                <li><a href="../../Views/contents/contact.php">Contact Us</a></li>
                            </ul>
                        </li>

                        <li>
                            <form class="form-inline my-2 my-lg-0" method="post"
                                  action="/get-productSearch.php?by-Text">
                                <input class="form-control mr-sm-2" name="title" type="search" placeholder="Tìm kiếm"
                                       aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">
                                    Search
                                </button>
                            </form>
                        </li>
                        <li class="scroll-to-section">
                            <a href="<?= "https://" . $_SERVER["HTTP_HOST"] . "/get-cart.php" ?>">
                                <ion-icon name="cart-outline" size="large"></ion-icon>
                            </a>
                        </li>
                        <li class="scroll-to-section">
                            <a href="<?= "https://" . $_SERVER["HTTP_HOST"] . "/get-User.php" ?>">
                                <ion-icon name="person-circle-outline" size="large"></ion-icon>
                            </a>
                        </li>
                    </ul>


                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
