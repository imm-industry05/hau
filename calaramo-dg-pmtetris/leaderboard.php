<?php
 
// Username is root
$host = "localhost";
$username = "root";
$password = "123";
$dbname = "leaderboards";

$conn = new mysqli($host,$username,$password,$dbname);
 
// SQL query to select data from database
$sql = " SELECT * FROM recent ";
$result = $conn->query($sql);

$sql2 = " SELECT * FROM bestscores ";
$result2 = $conn->query($sql2);

$conn->close();
?>



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Leaderboards</title>

<div class="header-container" >
    <div class = "header-child1" id="T"  >
        <h1><a href="index.html">D</a></h1>
    </div>

    <div  class = "header-child1" id="Logo" style="font-size:14px">
        <h1><a href="index.html">Poorman's <br>Tetris</a></h1>
    </div>

    <div  class = "header-child2" id="headerButtons">
        <h1><a href="about.html">About</a></h1>
    </div>
</div>

</head>

<body>

    <div>
        <h1 class="title-leaderboards">Leaderboards</h1>
    </div>

    <div class="grid-container">

        <div class="grid-child">  
            <h2 class="description-about">Recent Games</h2>
            <table class="description-about" style= "margin-left: auto; margin-right: auto;">
            <tr>
                <th>#</th>
                <th>Player Name</th>
                <th>Score</th>
                <th>Level</th>
            </tr>
            <?php
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['ID']; ?></td>
                <td><?php echo $rows['playername']; ?></td>
                <td><?php echo $rows['playerscore'];?></td>
                <td><?php echo $rows['playerlevel'];?></td>
            </tr>
            <?php
                }
            ?>
            </table>
        </div>

        <div class="grid-child">  
            <h2 class="description-about">Top Scores</h2>
            <table class="description-about" style= "margin-left: auto; margin-right: auto;">
            <tr>
                <th>#</th>
                <th>Player Name</th>
                <th>Score</th>
                <th>Level</th>
            </tr>
            <?php
                while($rows=$result2->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['ID']; ?></td>
                <td><?php echo $rows['playername']; ?></td>
                <td><?php echo $rows['playerscore'];?></td>
                <td><?php echo $rows['playerlevel'];?></td>
            </tr>
            <?php
                }
            ?>
            </table>
        </div>

    </div>

</body>
</html>