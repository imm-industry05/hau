<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BONTEA | LOGIN </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
    <link rel = "stylesheet" type ="text/css" href = "sstyle.css">
</head>
<body>
<!-- images -->
    <div class ="title"></div>
    <br>
    <div class ="logo"></div>
    <div class ="design"></div>

<!-- form box -->
    
        <form action="login.php" method="post"> 
                 <?php
                    if(isset($_GET['error'])){ 
                        ?> <p class = "error"><?php echo $_GET['error']; ?></p>
                   <?php } ?>
                <label>Username</label>
                <input  type ="text" name="username" placeholder="Username">
            
                <label>Password</label>
                <input type ="password" name="password" placeholder="Password">

                <button type="submit">LOGIN</button>
               <p class = "fontnp" >Doesn't have an account?</p><a class = "fonta" href="newacc.php"> Register here </a>
           
           </form>
    

    <footer>
        <div class="footer-content">
            <h3>BonTea Dela Paz Norte</h3>
            <p>B01 L18 Goldenville Dela Paz Norte. San Fernando City</p>
            <ul class = "socials"> 
                <li><a target="_blank" href="https://www.facebook.com/BonTEAdelapaz"><i class="fa fa-facebook"></i></a></li>
            </ul>    
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy; 2022 BonTea. designed by <span>kennethbelen</span></p>
        </div>
    </footer>
    
    
   
</body>
</html>