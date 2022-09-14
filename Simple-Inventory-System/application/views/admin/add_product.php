<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/styles.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>New Product - Admin</title>
    <style>
        form *{
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
                <li class="nav-item"><a class="nav-link active" href="/dashboards/index">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="/dashboards/profile">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="/dashboards/logoff">Log off</a></li>
            </ul>
        </header>
        <div class="error"><?=$this->session->flashdata('input_errors');?></div>
    </div>

        <div class="container">
            <h2 class="mt-5">Add a new product</h2>
            <a href="/dashboards/index">Return to Dashboard</a>
        
        <div>
            <form action="/dashboards/add_process" method="POST">
                <div class="mb-3">
                    <label class="form-label" for="name">Name: <input class="form-control" type="text" name="name"></label>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="description">Description: <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea></label>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="price">Price: <input class="form-control" type="text" name="price"></label>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="count">Inventory Count <input class="form-control" type="number" name="count"></label>
                </div>
                <input class="w-25 p-1 btn btn-primary form-control" type="submit" name="create" value="Create">
            </form>
        </div>
        </div>

</body>
</html>