<?php

class database
{
    public static function connect()
    {
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "Shop_X";
        $conn = mysqli_connect($hostname, $username, $password, $database);
        mysqli_set_charset($conn, "utf8mb4");
        if ($conn->connect_errno) {
            die("ket noi that bai" . $conn->connect_errno);
        }
        return $conn;
    }
}