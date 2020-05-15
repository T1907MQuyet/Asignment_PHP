<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sach</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<h1 style="text-align: center; color: brown">LIST BOOK</h1>
<table class="table">
    <thead style="background-color: lavenderblush ">
    <tr>
        <th scope="col"> ID </th>
        <th scope="col"> Name </th>
        <th scope="col"> Category </th>
        <th scope="col">Delete</th>
        <th scope="col">Update</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $book = new \Model\Book();
    //    $current = $_SESSION['book']
    ?>
    <?php foreach ($book->getBooks() as $s): ?>
        <tr>
            <td><a href="?route=edit&id=<?php echo $s["id"]; ?>"><?php echo $s["id"] ?></a></td>
            <td><?php echo $s["name"]?></td>
            <td><?php echo $s["category"]?></td>
            <td><a href="?route=delete&id=<?php echo $s["id"]; ?>">delete</a></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
</body>
</html>
