<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            width: 75%;
            margin: 0 auto;
            padding: 50px;
        }
        label{
            width: 300px;
            display: inline-block;
            margin: 5px;
        }
        fieldset{
            width: 330px;
            height: 230px;
            display: inline-block;
            padding: 20px;
            margin: 0 auto;
        }
        .login{
            height:100px;
            vertical-align: top;
            margin-left: 50px;
        }
        input{
            display: inline-block;
        }
    </style>
</head>
<body>
<?php echo validation_errors(); ?>

<?php echo form_open('authentications'); ?>

    <fieldset class="signup">
        <legend>Sign up</legend>
        <form action="/authentications/register" method="POST">
            <label for="fname">First name: <input type="text" name="fname"></label>
            <label for="lname">Last name: <input type="text" name="lname"></label>
            <label for="number">Contact number: <input type="text" name="number"></label>
            <label for="password">Password: <input type="password" name="password"></label>
            <label for="repeat_password">Repeat Password: <input type="password" name="repeat_password"></label>
            <input type="submit" value="Submit">
        </form>
    </fieldset>

    <fieldset class="login">
        <legend>Log In</legend>
        <form action="/authentications/login" method="POST">
            <label for="number">Contact number: <input type="text" name="number"></label>
            <label for="password">Password: <input type="password" name="password" ></label>
            <input type="submit" value="Log in">
        </form>
    </fieldset>
</body>
</html>