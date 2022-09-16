<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/employee.css">
    <title>Supplier</title>
</head>
<body>
<ul>
<li><a class="active" href="/adminPage.php">Dashboard<i class="fa fa-home"></i></a></li>
        <li><a href="#news">input</a></li>
        <li><a href="#contact">input</a></li>
        <li style="float:right"><a href="/forms/loginPage.php">Log out<i class="fa fa-arrow-right"></i></a></li>
</ul>     
<br/><br/>



    <div class="empContainer">
        <div class="inputEmployee">
         <div class="emp">
                <form action="forms/insertSupplier.php" method="POST">
                    <div class="inputEmp">
                        <input type="text" placeholder="Company name" name="company_name" value="" required>
                    </div>
                    <div class="inputEmp">
                        <input type="text" placeholder="Company Address" name="company_address" value="" required>
                 </div>
                    <div class="inputEmp">
                        <input type="text" placeholder="Phone Number" name="phone_number" value="" required>
                 </div>

                 <div class="buttonsub">
                 <input type="submit" name="submit" value="Submit" class="form-btn">
                 </div>
                </form>
            </div>
    </div>
</div>
</body>
</html>