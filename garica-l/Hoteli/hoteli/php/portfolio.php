<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>Admin Account Settings</title>
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

        <style>
             html::-webkit-scrollbar {
                display: none;
            }
            /* Full height image background */
            body {
                position: relative;
                background-position: center;
                background-attachment: fixed;
                background-size: cover;
                background-image: url("assets/portfolio-bg.jpg");
            }
            .container{
                position: absolute;
                margin: 40px 0 0 30px;
                text-align: center;
                width: 100%;
            }
            .container .content {
                position: absolute;
                background: rgba(255, 255, 255, 0.9); /* White background with 0.9 opacity */
                padding: 20px;
                width: 115%;
            }
            #back{
                background: #eee;
                color: black;
                text-decoration: none;
                position: relative;
                font-weight:bolder;
                margin: 20px 0 10px 1300px;
                box-shadow: 0 8px 19px -11px red;
                transition: transform .2s;
            }
            #back:hover{
                color: red;
                -ms-transform: scale(1.1); /* IE 9 */
                -webkit-transform: scale(1.1); /* Safari 3-8 */
                transform: scale(1.1);
                
            }
            button {
                border-radius: 20px;
                border: 1px solid #D3D3D3;
                background-color: #D3D3D3;
                color: black;
                font-size: 12px;
                font-weight: bold;
                margin: 20px 0;
                padding: 12px 45px;
                letter-spacing: 1px;
                text-transform: uppercase;
                transition: transform 80ms ease-in;
            }

            button:active {
                transform: scale(0.95);
            }

            button:focus {
                outline: none;
            }

            button.ghost {
                background-color: white;
                border-color: white;
            }
            button:hover {
                color: blue;
            }
            .header{
                padding-top: 10px;
                color: #000;
                font-size: 20px;
                margin: auto;
                line-height: 50px;
            }
            .sub-container{
                max-width: 1200px;
                margin: auto;
                padding: 30px 0;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }
            .teams{
                margin: 10px;
                padding: 22px;
                max-width: 30%;
                cursor: pointer;
                transition: 0.4s;
                box-sizing: border-box;
                transition: transform .2s;
            }
            .teams:hover{
                background: rgba(0, 0, 0, 0.3); /* Black background with 0.3 opacity */
                border-radius: 12px;
                -ms-transform: scale(1.1); /* IE 9 */
                -webkit-transform: scale(1.1); /* Safari 3-8 */
                transform: scale(1.1);
            } 
            .teams img{
                width: 200px; 
                height: 200px;
                border-radius: 100%;
            }
            .name{
                padding: 12px;
                font-weight: bold;
                font-size: 16px;
                text-transform: uppercase;
            }
            .desig{
                font-style: italic;
                color: #000;   
            }
            .about{
                margin: 20px 0;
                font-weight: lighter;
                color: #000;    
            }
            .social-links{
                margin: 14px;   
            }
            .social-links a{
                display: inline-block;
                height: 30px;
                width: 30px;
                transition: .4s;
            }
            .social-links a-hover{
                transform: scale(1.5);    
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <a href="index.php"><button type="button" id="back">Back</button></a>
                <div class="header">
                    <h1>The Developer</h1>
                </div>
                <div class="sub-container">
                    <div class="teams">
                        <img src="assets/lancelot.png" alt="Lancelot Picture" height="100px">
                        <div class="name">Lancelot G. Garcia</div>
                        <div class="desig">Project Manager</div>
                        <div class="about"> BACHELOR OF SCIENCE IN COMPUTER ENGINEERING </div>
        
                        <div class="social-links">
                            <a href="https://www.facebook.com/Kim.Jinsan.98"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="teams">
                        <img src="assets/none.png" alt="2nd Picture" height="100px">
                        <div class="name">AVAILABLE</div>
                        <div class="desig">ROLE</div>
                        <div class="about"> BACHELOR OF SCIENCE IN COMPUTER ENGINEERING </div>
        
                        <div class="social-links">
                            <a href="https://www.facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="teams">
                        <img src="assets/none.png" alt="3rd Picture" height="100px">
                        <div class="name">AVAILABLE</div>
                        <div class="desig">ROLE</div>
                        <div class="about"> BACHELOR OF SCIENCE IN COMPUTER ENGINEERING </div>
        
                        <div class="social-links">
                            <a href="https://www.facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>