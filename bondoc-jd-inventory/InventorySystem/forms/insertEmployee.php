<?php
$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];

if (!empty($email) || !empty($fname) || !empty($lname) || !empty(age)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "123";
    $dbname = "user_db";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }else{
        $SELECT = "SELECT email From user_employee Where email = ? Limit 1";
        $INSERT = "INSERT Into user_employee (email, firstname, lastname, age) values(?, ?, ?, ?)";


        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0){
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssi", $email, $fname, $lname, $age);
            $stmt->execute();
            echo "<script>alert('Success');
            window.location.href='http://localhost/InventorySystem/adminPage.php';</script>";


        }else{
            echo "Some already have this";
        }
        $stmt->close();
        $conn->close();

    }
}else{
    echo "All field are required";
    die();
}

?>