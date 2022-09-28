<?php
session_start();
require_once('dbcon.php');
$id = $_GET[id];
$query = "DELETE FROM `posts` WHERE `post_id`='$id'";
$run = mysqli_query($con,$query);
if($run)
{
    header("LOCATION:../admin/profile.php");
}
else
{
    header("LOCATION:../admin/profile.php");
}
?>