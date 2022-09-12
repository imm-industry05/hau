<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/Code/css/tableemployee.css">
</head>
<body>
    <div class="topnav">
        <ul>
            <li><a class="active" href="http://localhost/Code/adminPage.php">Dashboard<i class="fa fa-home"></i></a></li>
            <li><a href="#news">input</a></li>
            <li><a href="#contact">input</a></li>
            <li style="float:right"><a href="http://localhost/Code/forms/loginForm.php">Log out<i class="fa fa-arrow-right"></i></a></li>
        </ul>     
    <br/><br/>
    </div>
    

    <h1>List Of Employee</h1>
    <br>
    <div class="tableContent">
    <table class="table">
        <thead>
            <tr>
                <th class="content1">Email</th>
                <th class="content1">Firstname</th>
                <th class="content1">Lastname</th>
                <th class="content1">Age</th>
                <th class="content1">Action</th>
            </tr>
        </thead>

        <tbody class="content2">
            <?php
                $server = "localhost";
                $user = "root";
                $pass = "";
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
                            <td>". $row["lastname"] . "</td>
                            <td>". $row["age"] . "</td>
                            <td>
                                <a class='btn btn-danger btn-sm' href=''>delete</a>
                            </td>
                        </tr>";
                }

            
            
            
            ?>
        </tbody>
    </table>     
    </div>
    <div class="addbtn">
            <form action="http://localhost/Code/employee.php">
                <button class="btn btn-primary btn-lg">Add</button>
            </form>
    </div>
</body>
</html>