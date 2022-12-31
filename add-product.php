<?php
$id =  $_REQUEST["id"];
include "Controllers/CartController.php";
CartController::addProduct($id);
