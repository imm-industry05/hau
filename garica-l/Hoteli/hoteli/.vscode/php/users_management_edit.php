<?php
    session_start();
    require_once('config.php');

    if(isset($_SESSION['email']))
    {
       $sql = "SELECT * FROM userdata WHERE email='{$_SESSION["email"]}'";
       $result=mysqli_query($conn,$sql);
       $row=mysqli_fetch_array($result);

       if($row["type"]=="Admin")
       {    
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
        <title>Admin Dashboard</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Icon Offline-->
        <link href='css/all.min.css' rel='stylesheet'>
        <link href='css/fontawesome.min.css' rel='stylesheet'>
        <!--Bootstrap Offline-->
        <link href='css/bootstrap.css' rel='stylesheet'>
        <script src="js/bootstrap.js"></script>
        <!--Shortcut Icon-->
        <link rel="shortcut icon" type="x-icon" href="assets/logobg.png">
        <!--Pop Up-->
        <script src="js/pop_up.js"></script>
        <style>
           *{
            margin: 0;
            padding: 0;
            }
            .sidebar{
                position: fixed;
                top: 0;
                left: 0;
                height: 100%;
                width: 280px;
                background: #D3D3D3;
                box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
                    0 10px 10px rgba(0,0,0,0.22);
                z-index: 100;
                transition: all 0.5s ease;
            }
            .sidebar.close{
                width: 78px;
            }
            .sidebar .top{
                height: 80px;
                width: 100%;
                display: flex;
                align-items: center;
            }
            #logo{
            margin: 20px 0 0 20px;
            }
            .sidebar.close #logo{
                transition-delay: 0s;
                opacity: 0;
                pointer-events: none;
            }
            /*start username*/
            .sidebar .webname{
                margin: 20px 0 0 10px;
                font-size: 22px;
                font-weight: 550;
                color: #000;
                min-width: 100px;
                text-align: center;
                cursor: pointer;
            }
            .sidebar.close .webname{
                transition-delay: 0s;
                opacity: 0;
                pointer-events: none;
            }
            /*end username*/
            /*start tab icon*/
            .tab-icon .fa-bars{
                color: #000;
                font-size: 23px;
                position: fixed;
                margin: 0 6px 0 225px;
                cursor: pointer;
                transition: all 0.5s ease;
            } 
            .sidebar.close .fa-bars{
                margin: -5px 6px 0 30px;
                cursor: pointer;
            }
            /*end tab icon*/
            /*start line*/
            hr{
                color: #000;
                width: 100%;
                padding: 1px;
                margin-top: 5px;
            }
            /*end line*/
            .sidebar .nav-links{
                height: 100%;
                padding: 10px 0 150px 0;
                overflow: auto;
            }
            .sidebar.close .nav-links{
                overflow: visible;
            }
            /*remove scroll bar*/
            .sidebar .nav-links::-webkit-scrollbar{
                display: none;
            }
            /*end of remove scroll bar*/
            .sidebar .nav-links li{
                position: relative;
                list-style: none;
                transition: all 0.4s ease;
            }
            .sidebar .nav-links li:hover{
                background: #fff;
            }
            .sidebar .nav-links li{
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            .sidebar.close .nav-links li{
                display: block;
            }
            /*start open icon*/
            .sidebar .nav-links li i{
                margin-top: 2px;
                height: 65px;
                min-width: 79px;
                text-align: center;
                line-height: 65px;
                color: #000;
                font-size: 19px;
                cursor: pointer;
                transition: all 0.3s ease;
            }
            /*end open icon*/
            /*start close icon*/
            .sidebar.close .nav-links li i{
                height: 65px;
            }
            /*end close icon*/
            .sidebar .nav-links li a{
                display: flex;
                align-items: center;
                text-decoration: none;
            }
            /*link_name when its open - start*/
            .sidebar .nav-links li a .link_name{
                font-size: 18px;
                font-weight: 550;
                color: #000;
                transition: all 0.4s ease;
                white-space: nowrap;
            }
            /*open end*/
            /*link_name when its close*/
            .sidebar.close .nav-links li a .link_name{
                opacity: 0;
                pointer-events: none;
                white-space: nowrap;
            }
            /*close end*/
            /*start sub link name*/
            .sidebar .nav-links li .sub-menu{
                padding: 6px 6px 14px 80px;
                margin-top: 10px;
                background: #fff;
                display: none;
                box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
                    0 10px 10px rgba(0,0,0,0.22);
            }
            .sidebar .nav-links li.showMenu .sub-menu{
                display: block;
            }
            .sidebar .nav-links li .sub-menu a{
                color: #000;
                font-size: 18px;
                font-weight: 550;
                padding: 15px 0;
                white-space: nowrap;
                opacity: 0.6;
                transition: all 0.3s ease;
            }
            .sidebar .nav-links li .sub-menu a:hover{
                opacity: 0;
            }
            .sidebar.close .nav-links li .sub-menu{
                position: absolute;
                left: 100%;
                top: -10px;
                margin-top: 0;
                padding: 10px 20px;
                border-radius: 0 6px 6px 0;
                opacity: 0;
                display: block;
                pointer-events: none;
                transition: 0s;
            }
            .sidebar.close .nav-links li:hover .sub-menu{
                top: 0;
                opacity: 1;
                pointer-events: auto;
                transition: all 0.4s ease;
            }
            /*end sub link name*/
            .sidebar .nav-links li .sub-menu .link_name{
                display: none;
            }
            .sidebar.close .nav-links li .sub-menu .link_name{
                opacity: 1;
                display: block;
            }
            .sidebar .nav-links li .sub-menu.blank{
                opacity: 1;
                pointer-events: auto;
                padding: 3px 20px 6px 16px;
                opacity: 0;
                pointer-events: none;
            }
            .sidebar .nav-links li:hover .sub-menu.blank{
                top: 50%;
                transform: translateY(-50%);
            }
            /* Style the active class, and buttons on mouse-over */
            .active{
                background-color: #fff;
                padding-right: 100%;
                color: white;
            }
            /*start logout */
            .sidebar .logout{
                position: fixed;
                bottom: 0;
                padding: -5px 0 -5px 0;
                width: 280px;
                align-items: center;
                justify-content: space-between;
                background: #fff;
                transition: all 0.5s ease;
            }
            .sidebar.close .logout{
                width: 78px;
            }
            .sidebar .logout .job{
                color: black;
                font-size: 15px;
                font-weight: bold;
                white-space: nowrap;
            }
            .sidebar.close .logout .job{
                display: none;
            }
            .sidebar .logout .job{
                font-size: 12px;
            }
            /*end logout*/       
           /*start body area*/
           .home-section{
                position: relative;
                height: 100vh;
                left: 280px;
                width: calc(100% - 280px);
                transition: all 0.5s ease;
            }
            .sidebar.close ~ .home-section{
                left: 78px;
                width: calc(100% - 78px);
            }
            /*end body area*/
            .home-section .home-content{
                height: 100px;
                display: flex;
            }
            #background{
                background-image: url('assets/adminbg2.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                opacity: .1;
                padding: 45% 51% 110px 50%;
                position:fixed;
            }
          /*container box - try to put border to see the outline*/
            .row{
                position: absolute;      
            } 
            .container_info{
                font-size: 17px;
                color: black;
                font-weight: bold;
                margin: 50px 30% 0 80px;
                border-radius: 5px;
                padding: 20px 120px 60px 0;
            }
            .container_info legend{
                font-size: 30px;
                margin:-60px 0 60px 10%;
            }
            input[type=text], select, input[type=password], input[type=email] {
                width: 250%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                margin-top: 6px;
                margin-bottom: 16px;
            }
            input[type=submit] {
                font-size: 18px;
                margin: -30px 0 0 0;
                padding: 7px 20px;
                border-style: none;
            }
            input[type=submit]:hover {
                background-color: #45a049;
            }
            #eye{
                position: absolute;
                margin: -50px 0 0 710px;
            }
            #eyes{
                position: absolute;
                margin: -50px 0 0 710px;
            }
            .back{
                position: absolute;
                padding: 15px 0 0 168%;
                margin: -10px 0 auto;
                font-size: 20px;
                text-align: right;
                text-decoration: none;
            }   
        </style>
    </head>
    <body>
        <div class="sidebar close">
            <div class="top">
                <div class="tab-icon">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <img src="assets/logobg.png" width="40px" height="40px" id="logo"/>
                <span class="webname">
                    <?php 
                                $sql = "SELECT * FROM userdata WHERE email='{$_SESSION["email"]}'";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    echo $row['name']; 
                                }
                            }
                        ?>
                </span>
            </div>
            <hr>
            <ul class="nav-links">
                <li>
                    <a href="admin.php">
                        <i class='fa-solid fa-chart-line mr-3'></i>
                        <span class="link_name">Dashboard</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="admin.php">Dashboard</a></li>
                    </ul>
                </li>
                <li>
                    <a href="book_reserve_listed.php">
                        <i class='fa-solid fa-list-check mr-3'></i>
                        <span class="link_name">Book Reserve Listed</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name " href="book_reserve_listed.php">Book Reserve Listed</a></li>
                    </ul>
                </li>
                <li>
                    <a href="feedback_messages.php">
                        <i class='fa-solid fa-comments mr-3'></i>
                        <span class="link_name">Feedback Messages</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="feedback_messages.php">Feedback Messages</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="active">
                        <i class='fa-solid fa-users mr-3'></i>
                        <span class="link_name">Users Management</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="#">Users Management</a></li>
                    </ul>
                </li>
                <li>
                    <a href="admin_account_settings.php">
                        <i class="fa-solid fa-gear mr-3"></i>
                        <span class="link_name">Account Settings</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="admin_account_settings.php">Account Settings</a></li>
                    </ul>
                </li>
                <div class="logout">
                    <li>
                        <a href="logout.php?logout">
                            <i class='fa-solid fa-right-from-bracket mr-3' id="icon"></i>
                            <span class="link_name">Log out</span>
                        </a>
                        <ul class="sub-menu blank">
                            <li><a class="link_name" href="logout.php?logout">Log out</a></li>
                        </ul>
                    </li>
                </div>
            </ul>
        </div>
            <?php
                        $id=$_GET['edit'];
                        $query=mysqli_query($conn,"select * from `userdata` where id='$id'");
                        $row=mysqli_fetch_array($query); 

                    
                        if(isset($_GET['edit'])){
                            
                            $name = $row["name"];
                            $type = $row["type"];
                            $email = $row["email"];
                            $password = $row["password"];    
                    ?>
                <section class="home-section">
                    <div class="home-content">
                        <div id="background"></div>
                        <div class="row">
                            <div class="container_info">
                                <legend>Edit Account:</legend>
                                <div class="back">
                                    <a href="users_management.php"><button type="button" class="btn-close btn-close-black" aria-label="Close"></button></a>
                                </div>
                                <form method="POST" action="process.php?id=<?php echo $id; ?>">
                                    <label>Name:</label><br>
                                    <input type="text" name="name"  value="<?php echo $name ?>"require/><br>
                                    <label>Type:</label><br>
                                    <select name="type">
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                    </select><br>
                                    <label>Email:</label><br>
                                    <input type="email" name="email" value="<?php echo $email ?>"require/><br>
                                    <label>Password:</label><br>
                                    <input type="password" name="password" id="password" value="<?php echo $password ?>" pattern=".{8,}"  required title="8 characters minimum" required/><br>
                                    <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toogle()"></i>
                                    <label>Confirm Password:</label><br>
                                    <input type="password" name="cpassword" id="cpassword" value="<?php echo $password ?>" pattern=".{8,}"  required title="8 characters minimum" required/><br>
                                    <i class="fa fa-eye" aria-hidden="true" id="eyes" onclick="toogles()"></i><br>
                                    <input type="submit" name="updateuser" class="btn btn-success" onclick="return confirm('Are you sure you want to update this account?');" value="Update"/>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                    <?php
                        }
                        else
                        {
                    ?>          
                            <script>
                                alert('Failed to reload the page!');
                            
                            </script>
                    <?php
                        }        
                    ?>
        <script>
            //Closing Side Nav
            let sidebar = document.querySelector(".sidebar");
            let sidebarBtn = document.querySelector(".fa-bars");
            console.log(sidebarBtn);
            sidebarBtn.addEventListener("click", ()=>{
                sidebar.classList.toggle("close");
            });

            //Password Show/Hide Icon
            var state=false;
            function toogle(){
                if(state){
                    document.getElementById("password").setAttribute("type","password");
                    document.getElementById("eye").style.color='#7a797e';
                    state = false;
                }
                else{
                    document.getElementById("password").setAttribute("type","text");
                    document.getElementById("eye").style.color='#5887ef';
                    state = true;
                }
            }

            var state=false;
            function toogles(){
                if(state){
                    document.getElementById("cpassword").setAttribute("type","password");
                    document.getElementById("eyes").style.color='#7a797e';
                    state = false;
                }
                else{
                    document.getElementById("cpassword").setAttribute("type","text");
                    document.getElementById("eyes").style.color='#5887ef';
                    state = true;
                }
            }
        </script>
    </body>
<?php
    }else{
        header("location:user.php");
    }
        }
        else
        {
         header("location:index.php");
    }
?>
</html>
