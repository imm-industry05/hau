<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Dashboard - Admin</title>
    <style>
    </style>
</head>
<body>
    <div class="main-container">
        <header class="dashboard">
            <h1>V88 Merchandise</h1>
            <a href="/dashboards/index">Dashboard</a>
            <a href="/dashboards/profile">Profile</a>
            <a href="/dashboards/logoff">Log off</a>
        </header>
        <div class="error"><?=$this->session->flashdata('input_errors');?></div>
        <div class="info-container">
            <div class="sub-header">
                <h2>Manage Products</h2>
            </div>
        </div>
        <table border="2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Inventory Count</th>
                    <th>Quantity Sold</th>
                </tr>
            </thead>
            <tbody>

<?php
    foreach($products as $product)
    {
?>              <tr>
                    <td><?= $product['id']?></td>
                    <td><a href="/dashboards/show/<?= $product['id']?>"><?= $product['name']?></a></td>
                    <td><?= $product['count']?></td>
                    <td><?= $product['quantity_sold']?></td>
                </tr>        
<?php    
}
?>
            </tbody>
        </table>
    </div>
</body>
</html>
</body>
</html>