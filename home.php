<?php session_start();
if(empty($_SESSION['id'])):
    header('Location:login.php');
endif;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
</head>
<body style="background:url(catanddog.png); background-repeat: no-repeat;  background-size:100%">

    <a href="logout process.php"><div style="float:right"><button>logout</button></div></a>

    <h1>PawYou.Ph</h1>

</body>
</html