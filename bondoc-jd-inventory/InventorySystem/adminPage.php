<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/Code/css/adminpagetable.css">
    <link rel="stylesheet" href="http://localhost/Code/css/homePage.css">
    <title>Home-Admin</title>
</head>
<body> 
    <ul>
        <li><a class="active" href="http://localhost/Code/adminPage.php">Dashboard<i class="fa fa-home"></i></a></li>
        <li><a href="#news">input</a></li>
        <li><a href="#contact">input</a></li>
        <li style="float:right"><a href="http://localhost/Code/forms/loginForm.php">Log out<i class="fa fa-arrow-right"></i></a></li>
    </ul>     
    <br/><br/>


    <div class="cards">
      <div class="card">
        <div class="card-content">
          <div class="card-name"><a href="http://localhost/Code/customer.php">Customer</a></div>
        </div>
      </div>
      <div class="card">
        <div class="card-content">
          <div class="card-name"><a href="http://localhost/Code/insidephp/tableemployee.php">Employee</a></div>
        </div>
      </div>
      <div class="card">
        <div class="card-content">
          <div class="card-name"><a href="http://localhost/Code/products.php">Products</a></div>
        </div>
      </div>
      <div class="card">
        <div class="card-content">
          <div class="card-name"><a href="http://localhost/Code/supplier.php">Supplier</a></div>
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
    
    <div class="tableContent">
    <table class="table">
        <thead>
            <tr>
                <th class="content1">Email</th>
                <th class="content1">Firstname</th>
            </tr>
        </thead>

        <tbody class="content2">
            <?php
                $server = "localhost";
                $user = "root";
                $pass = "123";
                $database = "user_db";
                
                $conn = mysqli_connect($server, $user, $pass, $database);
                
                if(!$conn){
                    die("<script>alert('Connection failed')</script>");
                }
                
                $sql = "SELECT * FROM user_employee";
                $result = mysqli_query($conn, $sql);

                if(!$result){
                    die("<script>alert('Connection failed')</script>");
                }

                while($row = $result->fetch_assoc()){
                    echo"<tr>
                            <td>". $row["email"] . "</td>
                            <td>". $row["firstname"] . "</td>
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