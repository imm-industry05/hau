<?php
$email = $_POST['company_name'];
$fname = $_POST['company_address'];
$lname = $_POST['phone_number'];

if (!empty($email) || !empty($fname) || !empty($lname)){
    $host = "db";
    $dbUsername = "root";
    $dbPassword = "123";
    $dbname = "user_db";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }else{
        $SELECT = "SELECT company_name From user_supplier Where company_name = ? Limit 1";
        $INSERT = "INSERT Into user_supplier (company_name, company_address, phone_number) values(?, ?, ?)";


        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0){
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssi", $email, $fname, $lname);
            $stmt->execute();
            echo "<script>alert('Success');
            window.location.href='/adminPage.php';</script>";
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