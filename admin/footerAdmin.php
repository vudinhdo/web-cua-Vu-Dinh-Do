<footer class="tm-footer row tm-mt-small">
    <div class="col-12 font-weight-light">

    </div>
</footer>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/tooplate-scripts.js"></script>
<script>
    Chart.defaults.global.defaultFontColor = 'white';
    let ctxLine,
        ctxBar,
        ctxPie,
        optionsLine,
        optionsBar,
        optionsPie,
        configLine,
        configBar,
        configPie,
        lineChart;
    barChart, pieChart;
    // DOM is ready
    $(function () {
        drawLineChart(); // Line Chart
        drawBarChart(); // Bar Chart
        drawPieChart(); // Pie Chart

        $(window).resize(function () {
            updateLineChart();
            updateBarChart();
        });
    })
</script>
<script>
    $(function () {
        $(".tm-product-name").on("click", function () {
            window.location.href = "edit-product.php";
        });
    });
</script>
<script>
    $(function () {
        $("#expire_date").datepicker({
            defaultDate: "11/22/2023"
        });
    });
</script>
<script>
    $(function () {
        $("#expire_date").datepicker();
    });
</script>
<script>
    function deleteFunction(){
        alert("Sản phẩm này đã bị xóa");
    }
</script>
</body>

</html>