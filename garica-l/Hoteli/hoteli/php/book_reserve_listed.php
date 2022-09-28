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
            html::-webkit-scrollbar {
                display: none;
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
                position: absolute;
                background: #fff;
                height: 1000vh;
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
            }
            #background{
                background-image: url('assets/bg3.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                opacity: .4;
                padding: 45% 50% 700% 50%;
                position:absolute;
            }
            /*container for the feedback*/
            .container{
                position: absolute;
                padding: 10px 0 100px 60px;
            }
            /*container box - try to put border to see the outline*/
            .container .row{
                position: absolute;
                padding: 20px 0 500% 10px;
                /*border: black solid 2px;*/
            } 
            .container_info tr, th{
                font-size: 15px;
                color: #000;
                border-radius: 5px;
                padding: 20px 185px 20px 0;
            }
            .container_info td{
                padding: 5px 0;
            }
            h1{
                color: #000;
            }
            /*end container for the feedback*/    
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
                    <a href="#" class="active">
                        <i class='fa-solid fa-list-check mr-3'></i>
                        <span class="link_name">Book Reserve Listed</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name " href="#">Book Reserve Listed</a></li>
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
                    <a href="users_management.php">
                        <i class='fa-solid fa-users mr-3'></i>
                        <span class="link_name">Users Management</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="users_management.php">Users Management</a></li>
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
        <section class="home-section">
            <div class="home-content">
                <div id="background"></div>
                        <div class="container">
                            <div class="row">
                                <div class="container_info">
                                    <?php
                                        $result = $conn->query("SELECT * FROM userdata") or die ($conn->error);
                                    ?>
                                    <br>
                                    <table class="center col-md-12">
                                        <tr>
                                            <th id="name">Name</th>
                                            <th id="email">Email</th>
                                            <th id="book">Booked</th>
                                            <th id="dnt">Date and Time</th>
                                            <th id="actions">Action</th>
                                        </tr>
                                        <?php
                                            while ($row = $result->fetch_assoc()): ?>
                                                <tr>
                                                    <td id="name"><?php echo $row['name']; ?></td>
                                                    <td id="email"><?php echo $row['email']; ?></td>
                                                    <td id="book"><?php echo $row['book'];?></td>
                                                    <td id="dnt"><?php echo $row['dnt'];?></td>
                                                    <td>
                                                        <a href="process.php?deletebook=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to erase the booked of the client?');"><button type="button" class="btn btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                        <?php 
                                            endwhile; 
                                        ?>
                                    </table>
                                </div>
                            </div>       
                        </div>
                    </div>
                </div>
        </section>
        <script>
            let sidebar = document.querySelector(".sidebar");
            let sidebarBtn = document.querySelector(".fa-bars");
            console.log(sidebarBtn);
            sidebarBtn.addEventListener("click", ()=>{
            sidebar.classList.toggle("close");
            });
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
