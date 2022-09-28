<?php
    session_start();
    require_once('config.php');
?>
<!doctype html>

<html>
    <head>
        <title>Book Now</title>
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
        <link rel="shortcut icon" type="x-icon" href="asset/logo.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-image: url("assets/minimalbg.jpg");
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            margin: -20px 0 10px;
        }

        #back{
            background: #eee;
            color: black;
            float:right;
            text-decoration: none;
            position: relative;
            font-weight:bolder;
            margin: -80px 0 90px 1300px;
            box-shadow: 0 8px 19px -11px red;
            transition: transform .2s;
        }
        #back:hover{
            color: red;
            -ms-transform: scale(1.1); /* IE 9 */
            -webkit-transform: scale(1.1); /* Safari 3-8 */
            transform: scale(1.1);
                
            }
        h1 {
            font-weight: bold;
            margin: 0;
        }

        h2 {
            text-align: center;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        span {
            font-size: 12px;
        }

        a {
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }

        button {
            border-radius: 20px;
            border: 1px solid #D3D3D3;
            background-color: #66ffcc ;
            color: black;
            font-size: 12px;
            font-weight: bold;
            margin: 20px 0;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
            transition: transform .2s;
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
            color: #000 ;
            -ms-transform: scale(1.1); /* IE 9 */
            -webkit-transform: scale(1.1); /* Safari 3-8 */
            transform: scale(1.1); 
        }

        form {
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 28px rgba(0,0,0,0.25), 
                    0 2px 10px rgba(0,0,0,0.22);
            position: relative;
            overflow: hidden;
            width: 768px;
            top: -40px;
            max-width: 100%;
            min-height: 450px;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes show {
            0%, 49.99% {
                opacity: 0;
                z-index: 1;
            }
            
            50%, 100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .container.right-panel-active .overlay-container{
            transform: translateX(-100%);
        }

        .overlay {
            background-image: url('assets/sign-bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #66ffcc ;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }
        #eyes{
                position: absolute;
                margin: 25px 0 0 210px;
            }
        #eye{
            position: absolute;
            margin: 140px 0 0 210px;
        }
    </style>
    <body>
        <a href="index.php"><button type="button" id="back">Back</button></a>
        <div class="container" id="container">
            <!--Sign in Form and Sign up Form-->
            <div class="form-container sign-up-container">
                <form action="process.php" method="POST">
                    <h1>Create Account</h1>
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" id="password" name="password" placeholder="Password" pattern=".{8,}"  required title="8 characters minimum" required>
                    <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toogle()"></i>
                    <button name="signup">SignUp</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="process.php" method="POST">
                    <h1>Sign In</h1>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" id="passwords" name="password" placeholder="Password" pattern=".{8,}"  required title="8 characters minimum" required>
                    <i class="fa fa-eye" aria-hidden="true" id="eyes" onclick="toogles()"></i>
                    <button name="signin">Sign In</button>
                </form>
            </div>

            <!--Overlay the two tabs Sign in and Sign up-->
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your details and start journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            /*Function in switching open tab between the sign in and sign up*/
            const signUpButton = document.getElementById('signUp');
            const signInButton = document.getElementById('signIn');
            const container = document.getElementById('container');

            signUpButton.addEventListener('click', () => {
                container.classList.add("right-panel-active");
            });
            signInButton.addEventListener('click', () => {
                container.classList.remove("right-panel-active");
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
                    document.getElementById("passwords").setAttribute("type","password");
                    document.getElementById("eyes").style.color='#7a797e';
                    state = false;
                }
                else{
                    document.getElementById("passwords").setAttribute("type","text");
                    document.getElementById("eyes").style.color='#5887ef';
                    state = true;
                }
            }
        </script>
    </body>
</html>
