<?php
    include "logic.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>BLOG: Greek Mythology</title>
</head>
<body>
    <div class="container mt-3">
        <?php foreach($query as $q){?>
            <div class="bg-warning p-2 rounded text-dark text-center">
                <h1><?php echo $q['title'];?></h1>

                <div class="d-flex mt-3 justify-content-center align-items-center">
                    <a href="edit.php?id=<?php echo $q['id'];?>" class="btn btn-primary btn-sm">Edit blog</a>
                    
                    <form method="POST">
                        <input type="text" hidden name="id" value="<?php echo $q['id'];?>">
                        <button class="btn btn-danger btn-sm ml-2" name="delete">Delete blog</button>
                    </form>
                </div>
            </div>
            <p class="container bg-dark card rounded mt-4 text-warning h5"><?php echo $q['content'];?></p>
        <?php }?>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"></script>
</body>
</html>