<?php
require_once "../model/connection.php";
$title = $_POST['title'];
$path = $_FILES['img']['name'];
/* ID de manera correcta */
if (move_uploaded_file($_FILES['img']['name'], '../' . $path)) {
    $query = "INSERT INTO posts(title ,path ,user) VALUES (?,?,'1')";
    $sentencia = $pdo->prepare($query);
    $sentencia->bindParam(1, $title);
    $sentencia->bindParam(2, $path);
    $sentencia->execute();

    header("Location: ../view/home.html");
}else {
    header("Location: ../view/home.html");
}

