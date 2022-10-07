<?php
if(isset($_POST['post'])){
    $content = $_POST['content'];
    echo $content;
    $post_image = $_FILES['post_image'];
    print_r($post_image);
}
?>