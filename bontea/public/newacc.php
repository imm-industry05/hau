<?php
require('config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BONTEA | REGISTER</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="nstyle.css">
</head>
<body>
<div>
    <?php

    ?>
    
</div>
    <div>
        <form action = "newacc.php" method="post">
            <div class="container">

             <div class ="row">
                <div class ="col-sm-3">
                <h1>Registration</h1>
                <p>Fill up the form with correct values.</p>
                <hr class ="mb-3">
                <label for="firstname"><b>First Name </b></label>
                <input class ="form-control" type="text" id="firstname" name="firstname" required>

                <label for="lastname"><b>Last Name </b></label>
                <input class ="form-control" type="text" id="lastname" name="lastname" required>

                <label for="username"><b>Username </b></label>
                <input class ="form-control" type="text" id="username" name="username" required>

                <label for="contactnumber"><b>Contact Number</b></label>
                <input class ="form-control" type="text" id="contactnumber" name="contactnumber" required>
               
                <label for="password"><b>Password </b></label>
                <input class ="form-control" type="password" id="password" name="password" required>
                <hr class ="mb-3">
                <input class ="btn btn-primary" type="submit" id="register" name="create" value="Sign-up">
              </div>

              <a href = "index.php">Have an already Account</a>
          </div>
     </div>
    </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $(function(){
            $('#register').click(function(e){

                var valid = this.form.checkValidity();
                if(valid){

                var firstname = $('#firstname').val();
                var lastname = $('#lastname').val();
                var username = $('#username').val();
                var contactnumber = $('#contactnumber').val();
                var password = $('#password').val();

                    e.preventDefault();

                    $.ajax({
                        type: 'POST',
                        url: 'process.php',
                        data: {firstname: firstname,lastname: lastname,username: username,
                            contactnumber: contactnumber,password: password},
                        success: function(data){
                        Swal.fire({
                        position: 'middle',
                        'text' : data,
                        icon: 'success',
                        title: 'Created New Account',
                        showConfirmButton: false,
                        timer: 2000
                        })
                        },
                        error: function(data){
                        Swal.fire({
                        'title' : 'Errors',
                        'text' : "There were errors while saving the data.",
                        'type' : 'error'
    

                        })
                    }
                });
                    
                }    
                else{
                   
                }
            
                
        });

      
    });
        
</script>
</body>
</html>