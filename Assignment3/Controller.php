<?php

class Controller{
    public function books(){
        require_once "View/books.php";
    }

    public function editBook(){
        //nhan thong tin tu form
        $id = $_POST['id'];
        $name = $_POST['name'];
        $category = $_POST['category'];
        //insert to table
        $book = new \Model\Book($id, $name, $category);
        $book->save();
        header("Location: ?route=books");
    }
    public function delete(){
        $book = new \Model\Book();
        $book = $book->find($_GET["id"]);
        $book->delete();
        header("Location: ?route=books");
    }
    public function addBook(){
        require_once "View/addBook.php";
    }
    public function postAdd(){
        //nhan thong tin tu form
        $name = $_POST['name'];
        $category = $_POST['category'];
        //insert to table
        $book = new \Model\Book(null, $name, $category);
        $book->save();
        header("Location: ?route=books");
    }

}
