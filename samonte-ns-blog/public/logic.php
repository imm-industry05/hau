<?php

    $servername = "database";
    $username = "ci";
    $password = "ci";
    $dbname = "inventory";

    // $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    // $sql = "CREATE DATABASE blog";
    // if ($conn->query($sql) === TRUE) {
    // echo "Database created successfully";
    // } else {
    // echo "Error creating database: " . $conn->error;
    // }

    // sql to create table
    // $sql = "CREATE TABLE data (
    // id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    // title TEXT(255) NOT NULL,
    // content text(255) NOT NULL
    // )";
    
//    if ($conn->query($sql) === TRUE) {
//       echo "Table MyGuests created successfully";
//     } else {
//       echo "Error creating table: " . $conn->error;
//     } 

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
