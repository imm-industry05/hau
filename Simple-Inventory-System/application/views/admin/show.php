<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/styles.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Product Information</title>
    <style>
        .reply-container{
            margin-left: 40px;
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
    </div>
        
        <div class="mt-5 container bg-light">
            <h2><?= $product['name'] ?> (&#8369;<?= $product['price'] ?>)</h2>
            <p class="lead">Added since: <?= $product['date']?></p>
            <p class="lead">Product ID: #<?= $product['id'] ?></p>
            <p class="lead">Description: <?= $product['description']?></p>
            <p class="lead">Total sold: <?= $product['quantity_sold']?></p>
            <p class="lead">Number of available stocks: <?= $product['count']?></p>
        </div>

        <div class="container bg-light">
            <h4>Leave a review</h4>
            <form action="/dashboards/postReview" method="POST">
                <textarea class="form-control" name="review" cols="30" rows="10"></textarea>
                <input class="form-control w-25 mt-2 btn-primary" type="submit" name="submit" value="Post">
            </form>
<?php
            foreach($reviews as $review)
            {
?>              <h5><?= $review['name'] ?> <?= $review['date']?></h5>
                <p class="lead"> <?= $review['content']?></p>
                
                <div class="reply-container">
<?php           
        foreach($replies as $reply)
        {
            if($review['id']  == $reply['review_id'])
            {
?>              <h5><?= $reply['name'] ?> <?= $reply['date']?></h5>
                <p class="lead"> <?= $reply['content']?></p>
<?php       }
        }
?>
                <form action="/dashboards/postReply" method="POST">
                    <input type="hidden" name="review_id" value="<?= $review['id']?>">
                    <label class="form-label" for="reply"><textarea class="form-control" name="reply" placeholder= "Write a reply" cols="60" rows="2"></textarea></label>
                    <input class="form-control btn-primary w-25" type="submit" name="submit" value="Reply">
                </form>
            </div>
<?php       }
?>
        </div>

</body>
</html>