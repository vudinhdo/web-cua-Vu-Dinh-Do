<?php

class AdminModel
{
    /*
     * show sản phẩm trong trang admin
     */
    public static function showProductForAdmin()
    {
        include "database.php";
        $data = [];
        $conn = database::connect();
        $sql = "SELECT * FROM `products` ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $item = new stdClass();
                $item->id = $row["id"];
                $item->title = $row["title"];
                $item->thumbnail = $row["thumbnail"];
                $item->description = $row["description"];
                $item->price = $row["price"];
                $item->amount = $row["amount"];
                $item->category_id = $row["category_id"];
                $item->create_time = $row["create_time"];
                $item->update_time = $row["update_time"];
                $data[] = $item;
            }
            return $data;
        } else {
            return null;
        }
    }
/*
 * thêm sản phẩm vào giỏ hàng
 */
    public static function newProduct($title, $thumbnail, $description, $price, $category_id, $create_time, $update_time)
    {
        include "database.php";
        $conn = database::connect();
        $sql = "INSERT INTO products(`title`,`thumbnail`,`description`,`price`,`category_id`,`create_time`,`update_time`) VALUES ($title,$thumbnail,$description,$price,$category_id,$create_time,$update_time)";

    }

    /*
     * show admin trong trang about
     */

    public static function showAllAdminPerson()
    {
        include "database.php";
        $data = [];
        $conn = database::connect();
        $sql = "SELECT * FROM `admin` ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $item = new stdClass();
                $item->id = $row["id"];
                $item->name = $row["name"];
                $item->email = $row["email"];
                $item->avatar = $row["avatar"];
                $item->facebook = $row["facebook"];
                $item->twitter = $row["twitter"];
                $item->linkedin = $row["linkedin"];
                $item->behance = $row["behance"];
                $data[] = $item;
            }
            return $data;
        } else {
            return null;
        }
    }
}