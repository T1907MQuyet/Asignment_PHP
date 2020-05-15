<?php
require_once "User.php";
if(!empty($_GET["id"])):
    $user = new \assignment1\User();
    $user = $user->find($_GET["id"]);
    $user->delete();
    header("Location: users.php");// dieu huong tro lai trang danh sach
endif;
