<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "Shop_X");
mysqli_set_charset($conn, "utf8mb4");

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($email == '' || $username == "" || $password == "") {
        echo "<script>alert('nhập đầy đủ')</script>";
    } else {
        $sql_select_admin = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND username = '$username' AND password = '$password'");
        $num_rows = mysqli_num_rows($sql_select_admin);
        if ($num_rows == 0) {
            echo "tên đăng nhập hoặc mật khẩu không đúng !";
        } else {
            //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            header("Location: home.php");
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

</head>

<body>
<div class="container mt-5  ">
    <h1 class="text-center">Login</h1>
    <form method="post" >
        <div class="form-group">
            <label for="exampleInputEmail1">User username</label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="form-group form-check">

        </div>
        <button type="submit" class="btn " name="login">Đăng nhập</button>
        <button type="submit" class="btn">Đăng ký</button>
    </form>
</div>

<script>
    // alert("nếu bạn đã có tài khoản hãy đăng nhập để mua hàng");
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>