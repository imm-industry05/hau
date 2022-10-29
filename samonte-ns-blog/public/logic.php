<?php

    $conn = mysqli_connect("localhost", "root", "", "blog");

    if(!$conn){
        echo "<h4 class='container-fluid bg-dark text-center p-2 text-danger'>NOT ABLE TO CREATE DATABASE CONNECTION</h4>";
    }

    $sql = "SELECT * FROM data ORDER BY id DESC";
    $query = mysqli_query($conn, $sql);
    
    if(isset($_REQUEST["new_post"])){
        $title = $_REQUEST["title"];
        $content = $_REQUEST["content"];

        $sql = "INSERT INTO data(title, content) VALUES('$title', '$content')";
        mysqli_query($conn, $sql);

        header("Location: index.php?info=added");
        exit();
    }

    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];

        $sql = "SELECT * FROM data WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    if(isset($_REQUEST['update_post'])){
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "UPDATE data SET title = '$title', content = '$content' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: index.php?info=updated");
        exit();
    }

    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM data WHERE id = $id";
        $query = mysqli_query($conn, $sql);

        header("Location: index.php?info=deleted");
        exit();
    }
?>