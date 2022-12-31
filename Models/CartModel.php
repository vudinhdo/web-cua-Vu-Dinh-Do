<?php


class CartModel
{
    public static function addCart($id)
    {
        include "database.php";
        $data = null;
        $id = $_GET["id"];
        $conn = database::connect();
        $sql = "SELECT * FROM `products` WHERE id = '$id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $item = new stdClass();
                $item->id = $row["id"];
                $item->title = $row["title"];
                $item->thumbnail = $row["thumbnail"];
                $item->description = $row["description"];
                $item->price = $row["price"];
                $item->create_time = $row["create_time"];
                $item->update_time = $row["update_time"];
                $data[] = $item;
            }

            return $data;
        } else {
            return null;
        }
    }

    public static function getOwnItem()
    {
        require "ProductModel.php";
        include "database.php";
        $conn = database::connect();
        $items = [];
        $sql = "SELECT * From items where user_id=1 and order_id is null";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $item = new stdClass();
                $item->id = $row["id"];
                $item->product_id = $row["product_id"];
                $item->order_id = $row["order_id"];
                $item->user_id = $row["user_id"];
                $item->quantity = $row["quantity"];
                $item->product = ProductModel::show($row["product_id"]);
                $items[] = $item;
            }
        }
        return $items;
    }

}