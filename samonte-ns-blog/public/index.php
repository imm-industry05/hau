<?php
    include "logic.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <title>BLOG: Greek Mythology</title>
</head>
<body>
    <div class="background">
        <div class="container-fluid p-4 bg-warning text-center text-dark h1">
            <strong>BLOG: GODS AND GODDESSES IN GREEK MYTHOLOGY</strong>
            <div class="container mt-4">
                <?php if(isset($_REQUEST['info'])){?>
                    <?php if ($_REQUEST['info'] == "added"){?>
                        <div class="alert alert-success h4" role="alert">
                            <strong>New blog content has been successfully added!</strong>
                        </div>
                    <?php } else if($_REQUEST['info'] == "updated"){ ?>
                        <div class="alert alert-success h4" role="alert">
                            <strong>Blog content has been successfully edited!</strong>
                        </div>
                    <?php } else if($_REQUEST['info'] == "deleted"){ ?>
                        <div class="alert alert-danger h4" role="alert">
                            <strong>Blog content has been deleted</strong>
                        </div>
                    <?php }?>
                <?php }?>

                <div class="text-center">
                    <a href="create.php" class="btn btn-dark text-warning">Create New Blog</a>
                </div>
            </div>
        </div>    
        
        <div class="row">
            <?php foreach($query as $q){?>
                <div class="col d-flex justify-content-center align-items-center">
                    <div class="card text-warning bg-dark mt-3">
                        <div class="card-body" style="width: 350px;">
                            <h4 class="card-title text-center"><?php echo $q['title'];?></h4>
                            <p class="card-text"><?php echo $q['content'];?></p>
                            <a href="review.php?id=<?php echo $q['id'];?>" class="btn btn-light text-dark"> Read More <span class="text-dark">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"></script>
</body>
</html>