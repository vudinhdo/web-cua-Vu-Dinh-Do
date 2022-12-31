<?php

class UserController
{
    public static function getUser($email,$password,$username)
    {
        include "Models/UserModel.php";
        $user = UserModel::login($email,$password,$username);
        include "index.php";
    }

    public static function showoneUser($username){
        include "Models/UserModel.php";
        $users= UserModel::showUser($username);
        include "Views/contents/user.php";
    }

}