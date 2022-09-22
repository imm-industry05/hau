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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="container">
        <header class="d-flex align-items-center py-3 mb-3 mb-md-0 me-md-auto text-dark text-decoration-none border-bottom">
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
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span class="mb-3 mb-md-0 text-muted">© 2022 Andrei's Cool Shop, Inc</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/valencia.andreijoshua"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="https://twitter.com/andreijoshuaa"><i class="fa-brands fa-twitter"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/andreijoshuavalencia/"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </footer>
    </div>

</body>
</html>