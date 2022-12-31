<?php

class AdminController
{
    public static function ShowProduct()
    {
        require "../Models/AdminModel.php";
        $products = AdminModel::showProductForAdmin();
        if ($products != null) {
            include "../admin/products.php";
        } else {
            echo "<script> alert('Hãy thêm sản phẩm')  </script> ";
            include "../admin/add-product.php";
        }
    }

    public static function showAdmin()
    {
        require "Models/AdminModel.php";
        $admins = AdminModel::showAllAdminPerson();
        if ($admins!=null){
            include "Views/contents/about.php";
        }
    }

}