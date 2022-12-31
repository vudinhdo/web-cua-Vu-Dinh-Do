<?php

class ItemModel
{
    public static function makeItem($productId)
    {
        require "database.php";
        $conn = database::connect();
        $existProduct = "SELECT * FROM items WHERE product_id=$productId AND order_id is NULL";
        $result = $conn->query($existProduct);
        try {
            if ($result->num_rows != 0) {
                $item = $result->fetch_assoc();
                $itemId = $item["id"];
                $newQuantity = $item["quantity"] += 1;
                $plusItem = "UPDATE items SET quantity=$newQuantity WHERE id=$itemId";
                if ($conn->query($plusItem)) {
                    echo "Tang sl sp + $newQuantity";
                }
            } else {
                $userId = 1;
                $addItem = "INSERT INTO items (`user_id`,`product_id`,`quantity`) VALUES ($userId,$productId,1)";
                if ($conn->query($addItem)) {
                    echo "Them moi san pham id $productId cho $userId";
                }
            }
        } catch (Exception $exception) {
            echo "SP không ton tai";
        }
    }
}