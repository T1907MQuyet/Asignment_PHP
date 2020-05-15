<?php
if(count($_POST) > 0):
    require_once "User.php";

// nhan thong tin tu form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    // insert to table
    $user = new \assignment1\User(null,$name,$email,$pwd);
    $user->save();

    header("Location: users.php");// dieu huong tro lai trang danh sach
endif;