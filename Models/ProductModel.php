<?php


class ProductModel
{
    public static function getAll()
    {
        include "database.php";
        $data = [];
        $conn = database::connect();
        $sql = "SELECT * FROM `products`";
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

    public static function getByCategory($id)
    {
        include "database.php";
        $data = [];
        $conn = database::connect();
        $sql = "SELECT * FROM `products` where category_id = $id";
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

    public static function single($id)
    {
        $data = [];
        include "database.php";
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
                $data = $item;
            }
            return $data;
        } else {
            return null;
        }
    }

    public static function show($id)
    {
        $data = [];
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
                $data = $item;
            }
            return $data;
        } else {
            return null;
        }
    }

    public static function showSearch($title)
    {
        $data = [];
        $title = $_POST["title"];
        $conn = database::connect();
        $sql = "SELECT * FROM `products` WHERE title LIKE '%$title%'";
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

    /*
     * sort
     *
     */

    public static function sortPriceASC()
    {
        include "database.php";
        $data = [];
        $conn = database::connect();
        $sql = "SELECT * FROM `products` ORDER BY price ASC ";
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
    public static function sortPriceDESC()
    {
        include "database.php";
        $data = [];
        $conn = database::connect();
        $sql = "SELECT * FROM `products` ORDER BY price DESC ";
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
    public static function sortTitleASC()
    {
        include "database.php";
        $data = [];
        $conn = database::connect();
        $sql = "SELECT * FROM `products` ORDER BY title ASC ";
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
    public static function sortTitleDESC()
    {
        include "database.php";
        $data = [];
        $conn = database::connect();
        $sql = "SELECT * FROM `products` ORDER BY title DESC ";
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
}