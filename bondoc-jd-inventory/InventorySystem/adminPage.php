<?php

$server = "db";
$user = "root";
$pass = "123";
$database = "user_db";

$conn = mysqli_connect($server, $user, $pass, $database);

session_start();

if(!isset($_SESSION['admin_name'])){
  header('location:/InventorySystem/forms/loginPage.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/InventorySystem/css/clock.css">
    <link rel="stylesheet" type="text/css" href="/InventorySystem/css/homePage.css">
    <link rel="stylesheet" type="text/css" href="/InventorySystem/css/adminpagetable2.css">
    <title>Home-Admin</title>
</head>
<body> 
    <ul>
        <li><a class="active" href="/InventorySystem/adminPage.php">Dashboard <i class="fa-solid fa-bars"></i></a></li>
        <li style="float:right"><a href="/InventorySystem/forms/logout.php">Log out <i class="fa fa-arrow-right"></i></a></li>
    </ul>     
    <br/><br/>


    <div class="cards">
      <div class="card">
        <div class="card-content">
          <div class="card-name"><a href="/InventorySystem/insidephp/customer.php">Customer <i class="fa-solid fa-circle-user"></i></a></div>
        </div>
      </div>
      <div class="card">
        <div class="card-content">
          <div class="card-name"><a href="/InventorySystem/insidephp/tableemployee.php">Employee <i class="fa-solid fa-user-tie"></i></a></div>
        </div>
      </div>
      <div class="card">
        <div class="card-content">
          <div class="card-name"><a href="/InventorySystem/insidephp/product.php">Products <i class="fa-solid fa-coins"></i></a></div>
        </div>
      </div>
      <div class="card">
        <div class="card-content">
          <div class="card-name"><a href="/InventorySystem/insidephp/supplier.php">Supplier <i class="fa-solid fa-handshake"></i></a></div>
        </div>
      </div>
    
    
   <!-- <div class="admin_row">
            <div class="col-m-4">
                <div class="card" style="width: 20rem;">
                    <img src="http://localhost/Code/images/shark.png" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-user-text" name="cardtext">You</h5>
                      <p class="user-info">
                        Admin
                      </p>
                      <div class="button">
                        <input type="submit" name="submit" value="Click me" class="form-btn">
                      </div>
                    </div>
                  </div>
                </div>
              </div>    -->

    </div> 


  
      <div class="recentTb">
             <div class="mainClock">
          <div class="clock">
                  <div class="hour">
                    <div class="hr" id="hr"></div>
                  </div>
                  <div class="min">
                    <div class="mn" id="mn"></div>
                  </div>
                  <div class="sec">
                    <div class="sc" id="sc"></div>
                  </div>
                </div>
                <script type="text/javascript">
                  const deg = 6;
                  const hr = document.querySelector('#hr');
                  const mn = document.querySelector('#mn');
                  const sc = document.querySelector('#sc');

                  setInterval(() =>{
                        let day = new Date();
                        let hh = day.getHours() * 30;
                        let mm = day.getMinutes() * deg;
                        let ss = day.getSeconds() * deg;

                        hr.style.transform = `rotateZ(${(hh)+(mm/12)}deg)`;
                        mn.style.transform = `rotateZ(${mm}deg)`;
                        sc.style.transform = `rotateZ(${ss}deg)`;
                  })

                  
                </script>
           </div>
           <br/>

           <div class="table1">
            
           <diV class="tableContent">
            <h1>Recent Supplier</h1>
                <table class="table">
                        <thead>
                            <tr>
                                <th class="content1">ID</th>
                                <th class="content1">Company Name</th>
                                <th class="content1">Address</th>
                                <th class="content1">Phone Number</th>
                            </tr>
                        </thead>

                        <tbody class="content2">
                            <?php
                                $server = "db";
                                $user = "root";
                                $pass = "123";
                                $database = "user_db";
                                
                                $conn = mysqli_connect($server, $user, $pass, $database);
                                
                                if(!$conn){
                                    die("<script>alert('Connection failed')</script>");
                                }

                                $sql = "SELECT * FROM user_supplier";
                                $result = mysqli_query($conn, $sql);

                                if(!$result){
                                    die("<script>alert('Connection failed')</script>");
                                }

                                while($row = $result->fetch_assoc()){
                                    echo"<tr>
                                            <td>". $row["id"] . "</td>
                                            <td>". $row["company_name"] . "</td>
                                            <td>". $row["company_address"] . "</td>
                                            <td>". $row["phone_number"] . "</td>
                                        </tr>";
                                }

                            
                            
                            
                            ?>
                        </tbody>
                    </table>     
                </diV>









                <div class="tableContent">
                  <h1>Recent Product</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="content1">Product ID</th>
                                <th class="content1">Name</th>
                                <th class="content1">Product Code</th>
                                <th class="content1">Stock</th>
                                <th class="content1">Price</th>
                                <th class="content1">Date Stock In</th>
                            </tr>
                        </thead>

                        <tbody class="content2">
                            <?php
                                $server = "db";
                                $user = "root";
                                $pass = "123";
                                $database = "user_db";
                                
                                $conn = mysqli_connect($server, $user, $pass, $database);
                                
                                if(!$conn){
                                    die("<script>alert('Connection failed')</script>");
                                }

                                $sql = "SELECT * FROM product";
                                $result = mysqli_query($conn, $sql);

                                if(!$result){
                                    die("<script>alert('Connection failed')</script>");
                                }

                                while($row = $result->fetch_assoc()){
                                    echo"<tr>
                                            <td>". $row["product_id"] . "</td>
                                            <td>". $row["name"] . "</td>
                                            <td>". $row["product_code"] . "</td>
                                            <td>". $row["stock"] . "</td>
                                            <td>". $row["price"] . "</td>
                                            <td>". $row["date_stock_in"] . "</td>
                                        </tr>";
                                }

                            
                            
                            
                            ?>
                        </tbody>
                    </table>     
                    </div>
                                
           </div>

            
                  
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></>
</body>
</html>

