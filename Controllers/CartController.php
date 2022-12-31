<?php

class CartController
{
    public static function index()
    {
        require "Models/CartModel.php";
        $items = CartModel::getOwnItem();
//        print_r(json_encode($items));
        include "Views/contents/cart.php";
    }

    public static function addProduct($id)
    {
        require "Models/ItemModel.php";
        $result = ItemModel::makeItem($id);
        header("Location:/get-cart.php");
    }
    public static function checkOut()
    {
        require "Models/CartModel.php";
        $items = CartModel::getOwnItem();
//        print_r(json_encode($items));
        include "Views/contents/check-out.php";
    }
}