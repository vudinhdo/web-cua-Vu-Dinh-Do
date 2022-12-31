<?php
include "Controllers/ProductController.php";
ProductController::showByCategory($_REQUEST["id"]);