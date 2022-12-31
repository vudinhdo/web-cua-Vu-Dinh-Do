<?php
session_start();
include "Controllers/UserController.php";
UserController::showoneUser($_SESSION["username"]);