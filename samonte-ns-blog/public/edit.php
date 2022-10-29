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

    <title>BLOG: Greek Mythology</title>
</head>
<body>
    <div class="container-fluid p-4 bg-warning">

        <?php foreach($query as $q){?>
            <form method="POST">
                <input type="text" hidden name="id" value="<?php echo $q['id'];?>">
                <input type="text" placeholder="Title of the Blog" name="title" class="container-fluid form-control bg-dark text-warning text-center my-2"
                value="<?php echo $q['title'];?>">
                <textarea name="content" class="form-control bg-dark text-warning py-5 my-4"><?php echo $q['content'];?></textarea>
                <button name="update_post" class="btn btn-dark text-warning">Update Post</button>
            </form>
        <?php }?>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"></script>
</body>
</html>