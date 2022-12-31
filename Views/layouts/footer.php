<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="first-item">
                    <div class="logo">
                        <img src="../../public/assets/images/white-logo.png" alt="hexashop ecommerce templatemo">
                    </div>
                    <ul>
                        <li><a href="#">Yên Trị - Ý Yên - Nam Định</a></li>
                        <li><a href="#">vudinhdo2409@gmail.com</a></li>
                        <li><a href="#">0326360023</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <h4>Sản Phẩm Theo Thể Loại</h4>
                <ul>
                    <li><a href="<?= "https://" . $_SERVER["HTTP_HOST"] . "/category.php?id=1" ?>">Men’s Shopping</a></li>
                    <li><a href="<?= "https://" . $_SERVER["HTTP_HOST"] . "/category.php?id=2" ?>">Women’s Shopping</a></li>
                    <li><a href="<?= "https://" . $_SERVER["HTTP_HOST"] . "/category.php?id=3" ?>">Kid's Shopping</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="/home.php">Homepage</a></li>
                    <li><a href="/get-about.php">About Us</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>Help &amp; Information</h4>
                <ul>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">FAQ's</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Tracking ID</a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="under-footer">
                    <p>Sản phẩm thuộc về Vũ Đình Đô năm © 2022 .

                        <br>Design: <a href="#" target="_parent" title="free css templates">Vũ Đình Đô</a></p>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- jQuery -->
<script src="../../public/assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="../../public/assets/js/popper.js"></script>
<script src="../../public/assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="../../public/assets/js/owl-carousel.js"></script>
<script src="../../public/assets/js/accordions.js"></script>
<script src="../../public/assets/js/datepicker.js"></script>
<script src="../../public/assets/js/scrollreveal.min.js"></script>
<script src="../../public/assets/js/waypoints.min.js"></script>
<script src="../../public/assets/js/jquery.counterup.min.js"></script>
<script src="../../public/assets/js/imgfix.min.js"></script>
<script src="../../public/assets/js/slick.js"></script>
<script src="../../public/assets/js/lightbox.js"></script>
<script src="../../public/assets/js/isotope.js"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script src="../../public/assets/js/custom.js"></script>
<script>
    $(function() {
        var selectedClass = "";
        $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
                $("."+selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);

        });
    });
</script>

</body>
</html>