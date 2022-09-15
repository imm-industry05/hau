<?php
$email = $_POST['product_id'];
$fname = $_POST['product_code'];
$lname = $_POST['name'];
$stock = $_POST['stock'];
$price = $_POST['price'];
$date = $_POST['date_stock_in'];

if (!empty($email) || !empty($fname) || !empty($lname) || !empty($stock) || !empty($price) || !empty($date)){
    $host = "localhost";
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
            window.location.href='./adminPage.php';</script>";


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