<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "Shop_X";
$conn = mysqli_connect($hostname, $username, $password, $database);
mysqli_set_charset($conn, "utf8mb4");
$id = $_GET["id"];
$sql= "DELETE FROM `products` WHERE id = '$id'";
$query = mysqli_query($conn,$sql);
header("location: get-products.php");