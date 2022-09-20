<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <title>Product Information</title>
    <style>
        .reply-container{
            margin-left: 40px;
        }
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
        <div class="product-container">
            <h2><?= $product['name'] ?> (&#8369;<?= $product['price'] ?>)</h2>
            <p>Added since: <?= $product['date']?></p>
            <p>Product ID: #<?= $product['id'] ?></p>
            <p>Description: <?= $product['description']?></p>
            <p>Total sold: <?= $product['quantity_sold']?></p>
            <p>Number of available stocks: <?= $product['count']?></p>
        </div>

        <div class="reviews-container">
            <h4>Leave a review</h4>
            <form action="/dashboards/postReview" method="POST">
                <textarea name="review" cols="30" rows="10"></textarea>
                <input type="submit" name="submit" value="Post">
            </form>
<?php
            foreach($reviews as $review)
            {
?>              <h5><?= $review['name'] ?> <?= $review['date']?></h5>
                <p> <?= $review['content']?></p>
                
                <div class="reply-container">
<?php           
        foreach($replies as $reply)
        {
            if($review['id']  == $reply['review_id'])
            {
?>              <h5><?= $reply['name'] ?> <?= $reply['date']?></h5>
                <p> <?= $reply['content']?></p>
<?php       }
        }
?>
                <form action="/dashboards/postReply" method="POST">
                    <input type="hidden" name="review_id" value="<?= $review['id']?>">
                    <label for="reply"><textarea name="reply" placeholder= "Write a reply" cols="20" rows="5"></textarea></label>
                    <input type="submit" name="submit" value="Reply">
                </form>
            </div>
<?php       }
?>
        </div>
    </div>
</body>
</html>