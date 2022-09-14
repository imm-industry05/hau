<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/styles.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Product Dashboard - Admin</title>
    <style>
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
    </div>

        <div class="container">
            <div class="sub-header">
                <h2 class="mt-5">Manage Products</h2>
                <a href="/dashboards/add">Add new</a>
            </div>
        
        <table class="table table-striped table-hover" border="2">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Inventory Count</th>
                    <th scope="col">Quantity Sold</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

<?php
    foreach($products as $product)
    {
?>              <tr scope="row">
                    <td><?= $product['id']?></td>
                    <td><a href="/dashboards/show/<?= $product['id']?>"><?= $product['name']?></a></td>
                    <td><?= $product['count']?></td>
                    <td><?= $product['quantity_sold']?></td>
                    <td><a href="/dashboards/edit/<?= $product['id']?>">edit</a> | <a href="remove_product/<?= $product['id']?>">remove</a></td>
                </tr>        
<?php    
}
?>
            </tbody>
        </table>
        </div>

</body>
</html>