<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <!-- <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/styles.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <header class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <h1 class="container d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">Andrei's Cool Shop</h1>
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="/welcome/viewRegister">Register</a></li>
            </ul>
        </header>
        <div class="alert alert-danger"><?=$this->session->flashdata('input_errors');?></div>
    </div>


        <div class="container">
            <h2>Register</h2>
            <form action="/welcome/register" method="POST">
                <div class="mb-3">
                    <label class="form-label" for="email">Email address:<input class="form-control" type="text" name="email"></label>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="first_name">First name:<input class="form-control" type="text" name="first_name"></label>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="last_name">Last name:<input class="form-control" type="text" name="last_name"></label>
                </div>
                <div class="mb-3">
                    <label class="form-label"for="password">Password:<input class="form-control" type="password" name="password"></label>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="conf_password">Confirm Password: <input class="form-control" type="password" name="conf_password"></label>
                </div>
                <div class="mb-3">
                    <input class="w-25 p-1 btn btn-primary form-control" type="submit" name="register" value="Register">
                </div>
                <a href="/welcome/index">Already have an account? Log in</a>
            </form>

        </div>

</body>
</html>