<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/styles.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Profile</title>
    <style>
        fieldset{
            width: 400px;
            height: 250px;
            display: inline-block;
        }
        fieldset *{
            display: block;
            margin: 10px;
        }
        .save{
            display: block;
        }
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <h1 class="container d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">Andrei's Cool Shop</h1>
            <ul class="w-50  nav nav-pills">
                <li class="nav-item"><a class="nav-link " href="/dashboards/index">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link active" href="/dashboards/profile">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="/dashboards/logoff">Log off</a></li>
            </ul>
        </header>
        <div class="error"><?=$this->session->flashdata('input_errors');?></div>
    </div>

    <div class="container">
        <h2 class="mt-5">Edit Profile</h2>
        <form action="/dashboards/edit_user" method="POST">
            <fieldset>
                <div class="mb-3">
                    <legend>Edit Information</legend>
                    <label class="form-label" for="email">Email address: <input class="form-control" type="text" name="email" placeholder="(email address of user)"></label>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="first_name">First name: <input class="form-control" type="text" name="first_name" placeholder="first name of user"></label>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="last_name">Last name: <input class="form-control" type="text" name="last_name" placeholder="last name of user"></label>
                </div>
            </fieldset>

            <fieldset>
                <div class="mb-3">
                    <legend>Change Password</legend>
                    <label class="form-label" for="old_password">Old Password: <input class="form-control" type="password" name="old_password"></label>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">New Password: <input class="form-control" type="password" name="password"></label>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="conf_password">Confirm Password: <input class="form-control" type="password" ]name="conf_password"></label>
                </div>
            </fieldset>
            <input class="w-50 mt-5 btn btn-primary" type="submit" name="save" value="Save" class="save">
        </form>
    </div>

</body>
</html>