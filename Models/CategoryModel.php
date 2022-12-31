<?php


class CategoryModel
{
    public static function getAll()
    {
        include "database.php";
        $data = [];
        $conn = database::connect();
        $sql = "SELECT * FROM `categories`";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $item = new stdClass();
                $item->id = $row["id"];
                $item->title = $row["title"];
                $item->slug = $row["slug"];
                $data[] = $item;
            }
            return $data;
        } else {
            return null;
        }
    }



}