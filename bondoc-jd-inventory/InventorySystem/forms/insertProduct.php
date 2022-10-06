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



$email = $_POST['product_id'];
$fname = $_POST['product_code'];
$lname = $_POST['name'];
$stock = $_POST['stock'];
$price = $_POST['price'];
$date = $_POST['date_stock_in'];

if (!empty($email) || !empty($fname) || !empty($lname) || !empty($stock) || !empty($price) || !empty($date)){
    $host = "db";
    $dbUsername = "root";
    $dbPassword = "123";
    $dbname = "user_db";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }else{
        $SELECT = "SELECT product_id From product Where product_id = ? Limit 1";
        $INSERT = "INSERT Into product (product_id, product_code, name, stock, price, date_stock_in) values(?, ?, ?, ?, ?, ?)";


        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0){
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("iisiii", $email, $fname, $lname, $stock, $price, $date);
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