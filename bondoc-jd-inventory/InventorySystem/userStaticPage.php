<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/InventorySystem/css/userStaticPage.css">
</head>
<body>
    <div class="topnav">
        <ul>
            <li><a class="active" href="/InventorySystem/userStatic.php">Real Time Product Supply <i class="fa-solid fa-check"></i></a></li>
            <li style="float:right"><a href="/InventorySystem/forms/loginPage.php">Log out <i class="fa fa-arrow-right"></i></a></li>
        </ul>     
    <br/><br/>
    </div>
    

    <h1>List Of Product</h1>
    <br>
    <div class="tableContent">
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

    <div class="about">
        <h2>Only at Physical Stores</h2>
        <p class="one">Product stocks may differ in other branches</p>
        <p class="two"><a href="/InventorySystem/Contact.html">Contact Us</a></p>
    </div>
       
</body>
</html>