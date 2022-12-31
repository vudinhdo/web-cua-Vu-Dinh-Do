<?php

class UserModel
{
    public static function showUser($username)
    {
        include "database.php";
        $data = [];
        $conn = database::connect();
        $sql = "SELECT * FROM `users` where username = '$username'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $item = new stdClass();
                $item->id = $row["id"];
                $item->username = $row["username"];
                $item->email = $row["email"];
                $item->password = $row["password"];
                $item->avatar = $row["avatar"];
            }
        }

    }

}