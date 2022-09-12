<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <style>
        fieldset{
            width: 500px;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <a href="/authentications/index">Log out</a>
        <fieldset>
            <legend>Basic Information</legend>
            <p>First name: <?= $info['first_name']?></p>
            <p>Last name: <?= $info['last_name']?></p>
            <p>Contact Number: <?= $info['number']?></p>
            <p>Last failed login: <?= $info['created_at']?></p>
        </fieldset>
    </div>
</body>
</html>