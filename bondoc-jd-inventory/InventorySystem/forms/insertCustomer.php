<?php
$server = "db";
$user = "root";
$pass = "123";
$database = "user_db";

$conn = mysqli_connect($server, $user, $pass, $database);

session_start();

if(!isset($_SESSION['admin_name'])){
  header('location:/forms/loginPage.php');
}



$email = $_POST['customer_id'];
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$age = $_POST['phone_number'];

if (!empty($email) || !empty($fname) || !empty($lname) || !empty(age)){
    $host = "db";
    $dbUsername = "root";
    $dbPassword = "123";
    $dbname = "user_db";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }else{
        $SELECT = "SELECT customer_id From customer Where customer_id = ? Limit 1";
        $INSERT = "INSERT Into customer (customer_id, first_name, last_name, phone_number) values(?, ?, ?, ?)";


        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0){
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("issi", $email, $fname, $lname, $age);
            $stmt->execute();
            echo "<script>alert('Success');
            window.location.href='/index.php';</script>";
        }else{
            echo '<script>alert("Some Information Already Exist..")</script>';
        }
        $stmt->close();
        $conn->close();

    }
}else{
    echo "All field are required";
    die();
}

?>