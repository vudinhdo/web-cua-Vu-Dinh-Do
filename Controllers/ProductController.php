<?php

class ProductController
{
    /*
     * danh sách sản phẩm
     *
     */
    public static function index()
    {
        require "Models/ProductModel.php";
        $products = ProductModel::getAll();
        if ($products != null) {
            include "Views/contents/products.php";
        } else {
            return null;
        }
    }

    /*
       *
       * chi tiết sản phẩm
       */
    public static function detailProduct($id)
    {
        require "Models/ProductModel.php";
        $product = ProductModel::single($id);
        if ($product != null) {
            include "Views/contents/single-product.php";
        } else {
            return null;
        }
    }

    /*
     * tìm kiếm sản phẩm
     */
    public static function search($title)
    {
        require "Models/ProductModel.php";
        $products = ProductModel::showSearch($title);
        if (isset($_POST["search"])) {
            include "Views/contents/productSearch.php";
        }
    }
    /*
       * hiển thị sản phẩm theo thể loại
    */
    public static function showByCategory($id)
    {
        require "Models/ProductModel.php";
        $products = ProductModel::getByCategory($id);
        if ($products != null) {
            include "Views/contents/products.php";
        } else {
            return null;
        }
    }
    /*
     *
     * hiển thị sản phẩm khi sắp xếp
     */
    public static function priceASC()
    {
        require "Models/ProductModel.php";
        $products = ProductModel::sortPriceASC();
        if ($products != null) {
            include "Views/contents/products.php";
        } else {
            return null;
        }
    }
    public static function priceDESC()
    {
        require "Models/ProductModel.php";
        $products = ProductModel::sortPriceDESC();
        if ($products != null) {
            include "Views/contents/products.php";
        } else {
            return null;
        }

    }

    public static function titleASC()
    {
        require "Models/ProductModel.php";
        $products = ProductModel::sortTitleASC();
        if ($products != null) {
            include "Views/contents/products.php";
        } else {
            return null;
        }
    }
    public static function titleDESC()
    {
        require "Models/ProductModel.php";
        $products = ProductModel::sortTitleDESC();
        if ($products != null) {
            include "Views/contents/products.php";
        } else {
            return null;
        }
    }
}