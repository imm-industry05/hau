<?php
    // getting all values from the HTML form

    $playername = $_POST['playername'];
    $playerscore = $_POST['playerscore'];
    $playerlevel = $_POST['playerlevel'];

    $host = "localhost";
    $username = "root";
    $password = "123";
    $dbname = "leaderboards";

    $conn = new mysqli($host,$username,$password,$dbname);

    if (!$conn)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    //Check rows in bestscores table
    $result = $conn -> query("SELECT * FROM bestscores");
    $rows = mysqli_num_rows($result);

    //Fills rows when there are less than 10 in table bestscores
    while ($rows != 10){
        $sql = "INSERT INTO bestscores (playername, playerscore, playerlevel) VALUES ('empty','0','0')";
        mysqli_query($conn, $sql);
        $rows = $rows+1;
    }

    //converts form score and level to int
    $intscore = intval($playerscore);
    $intlevel = intval($playerlevel);
    $replace = 1;

    while ($replace == 1){

        $sql = "SELECT playerscore FROM bestscores WHERE ID = 1";
        $result = $conn -> query($sql);
        $row = $result -> fetch_array(MYSQLI_ASSOC);
        $oldscore = intval($row['playerscore']);

        if ($intscore > $oldscore){
            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 9";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 10"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 8";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 9"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 7";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 8"; 
            mysqli_query($conn, $sql);
            
            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 6";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 7"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 5";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 6"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 4";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 5"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 3";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 4"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 2";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 3"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 1";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 2"; 
            mysqli_query($conn, $sql);

            $sql = "UPDATE bestscores SET playername='$playername', playerscore = '$playerscore', playerlevel = '$playerlevel' WHERE ID = 1"; 
            mysqli_query($conn, $sql);

            $replace = 0;
            break;
        }

        $sql = "SELECT playerscore FROM bestscores WHERE ID = 2";
        $result = $conn -> query($sql);
        $row = $result -> fetch_array(MYSQLI_ASSOC);
        $oldscore = intval($row['playerscore']);

        if ($intscore > $oldscore){
            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 9";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 10"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 8";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 9"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 7";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 8"; 
            mysqli_query($conn, $sql);
            
            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 6";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 7"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 5";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 6"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 4";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 5"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 3";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 4"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 2";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 3"; 
            mysqli_query($conn, $sql);

            $sql = "UPDATE bestscores SET playername='$playername', playerscore = '$playerscore', playerlevel = '$playerlevel' WHERE ID = 2"; 
            mysqli_query($conn, $sql);

            $replace = 0;
            break;
        }

        $sql = "SELECT playerscore FROM bestscores WHERE ID = 3";
        $result = $conn -> query($sql);
        $row = $result -> fetch_array(MYSQLI_ASSOC);
        $oldscore = intval($row['playerscore']);

        if ($intscore > $oldscore){
            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 9";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 10"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 8";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 9"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 7";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 8"; 
            mysqli_query($conn, $sql);
            
            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 6";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 7"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 5";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 6"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 4";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 5"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 3";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 4"; 
            mysqli_query($conn, $sql);

            $sql = "UPDATE bestscores SET playername='$playername', playerscore = '$playerscore', playerlevel = '$playerlevel' WHERE ID = 3"; 
            mysqli_query($conn, $sql);

            $replace = 0;
            break;
        }

        $sql = "SELECT playerscore FROM bestscores WHERE ID = 4";
        $result = $conn -> query($sql);
        $row = $result -> fetch_array(MYSQLI_ASSOC);
        $oldscore = intval($row['playerscore']);

        if ($intscore > $oldscore){
            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 9";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 10"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 8";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 9"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 7";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 8"; 
            mysqli_query($conn, $sql);
            
            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 6";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 7"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 5";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 6"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 4";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 5"; 
            mysqli_query($conn, $sql);

            $sql = "UPDATE bestscores SET playername='$playername', playerscore = '$playerscore', playerlevel = '$playerlevel' WHERE ID = 4"; 
            mysqli_query($conn, $sql);

            $replace = 0;
            break;
        }

        $sql = "SELECT playerscore FROM bestscores WHERE ID = 5";
        $result = $conn -> query($sql);
        $row = $result -> fetch_array(MYSQLI_ASSOC);
        $oldscore = intval($row['playerscore']);

        if ($intscore > $oldscore){
            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 9";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 10"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 8";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 9"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 7";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 8"; 
            mysqli_query($conn, $sql);
            
            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 6";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 7"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 5";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 6"; 
            mysqli_query($conn, $sql);

            $sql = "UPDATE bestscores SET playername='$playername', playerscore = '$playerscore', playerlevel = '$playerlevel' WHERE ID = 5"; 
            mysqli_query($conn, $sql);

            $replace = 0;
            break;
        }

        $sql = "SELECT playerscore FROM bestscores WHERE ID = 6";
        $result = $conn -> query($sql);
        $row = $result -> fetch_array(MYSQLI_ASSOC);
        $oldscore = intval($row['playerscore']);

        if ($intscore > $oldscore){
            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 9";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 10"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 8";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 9"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 7";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 8"; 
            mysqli_query($conn, $sql);
            
            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 6";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 7"; 
            mysqli_query($conn, $sql);

            $sql = "UPDATE bestscores SET playername='$playername', playerscore = '$playerscore', playerlevel = '$playerlevel' WHERE ID = 6"; 
            mysqli_query($conn, $sql);

            $replace = 0;
            break;
        }

        $sql = "SELECT playerscore FROM bestscores WHERE ID = 7";
        $result = $conn -> query($sql);
        $row = $result -> fetch_array(MYSQLI_ASSOC);
        $oldscore = intval($row['playerscore']);

        if ($intscore > $oldscore){
            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 9";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 10"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 8";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 9"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 7";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 8"; 
            mysqli_query($conn, $sql);

            $sql = "UPDATE bestscores SET playername='$playername', playerscore = '$playerscore', playerlevel = '$playerlevel' WHERE ID = 7"; 
            mysqli_query($conn, $sql);

            $replace = 0;
            break;
        }

        $sql = "SELECT playerscore FROM bestscores WHERE ID = 8";
        $result = $conn -> query($sql);
        $row = $result -> fetch_array(MYSQLI_ASSOC);
        $oldscore = intval($row['playerscore']);

        if ($intscore > $oldscore){
            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 9";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 10"; 
            mysqli_query($conn, $sql);

            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 8";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 9"; 
            mysqli_query($conn, $sql);

            $sql = "UPDATE bestscores SET playername='$playername', playerscore = '$playerscore', playerlevel = '$playerlevel' WHERE ID = 8"; 
            mysqli_query($conn, $sql);

            $replace = 0;
            break;
        }

        $sql = "SELECT playerscore FROM bestscores WHERE ID = 9";
        $result = $conn -> query($sql);
        $row = $result -> fetch_array(MYSQLI_ASSOC);
        $oldscore = intval($row['playerscore']);

        if ($intscore > $oldscore){
            $sql = "SELECT playername, playerscore, playerlevel FROM bestscores WHERE ID = 9";
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $recentname = $row['playername']; 
            $recentscore = $row['playerscore'];
            $recentlevel = $row['playerlevel'];
            $sql = "UPDATE bestscores SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 10"; 
            mysqli_query($conn, $sql);

            $sql = "UPDATE bestscores SET playername='$playername', playerscore = '$playerscore', playerlevel = '$playerlevel' WHERE ID = 9"; 
            mysqli_query($conn, $sql);

            $replace = 0;
            break;
        }

        $sql = "SELECT playerscore FROM bestscores WHERE ID = 10";
        $result = $conn -> query($sql);
        $row = $result -> fetch_array(MYSQLI_ASSOC);
        $oldscore = intval($row['playerscore']);

        if ($intscore > $oldscore){

            $sql = "UPDATE bestscores SET playername='$playername', playerscore = '$playerscore', playerlevel = '$playerlevel' WHERE ID = 10"; 
            mysqli_query($conn, $sql);

            $replace = 0;
            break;
        }

        $replace = 0;
        break;
        
    }
         
   

    
    //Check rows in recent table
    $result = $conn -> query("SELECT * FROM recent");
    $rows = mysqli_num_rows($result);
    //If rows are less than 10, add data in table
    //Else replace top most entry in table
    if ($rows != 10){
        $sql = "INSERT INTO recent (playername, playerscore, playerlevel) VALUES ('$playername',' $playerscore','$playerlevel')";
        mysqli_query($conn, $sql);
    }else{
        $sql = "SELECT playername, playerscore, playerlevel FROM recent WHERE ID = 9";
        $result = $conn -> query($sql);
        $row = $result -> fetch_array(MYSQLI_ASSOC);
        $recentname = $row['playername']; 
        $recentscore = $row['playerscore'];
        $recentlevel = $row['playerlevel'];
        $sql = "UPDATE recent SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 10"; 
        mysqli_query($conn, $sql);

        $sql = "SELECT playername, playerscore, playerlevel FROM recent WHERE ID = 8";
        $result = $conn -> query($sql);
        $row = $result -> fetch_array(MYSQLI_ASSOC);
        $recentname = $row['playername']; 
        $recentscore = $row['playerscore'];
        $recentlevel = $row['playerlevel'];
        $sql = "UPDATE recent SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 9"; 
        mysqli_query($conn, $sql);

        $sql = "SELECT playername, playerscore, playerlevel FROM recent WHERE ID = 7";
        $result = $conn -> query($sql);
        $row = $result -> fetch_array(MYSQLI_ASSOC);
        $recentname = $row['playername']; 
        $recentscore = $row['playerscore'];
        $recentlevel = $row['playerlevel'];
        $sql = "UPDATE recent SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 8"; 
        mysqli_query($conn, $sql);

        $sql = "SELECT playername, playerscore, playerlevel FROM recent WHERE ID = 6";
        $result = $conn -> query($sql);
        $row = $result -> fetch_array(MYSQLI_ASSOC);
        $recentname = $row['playername']; 
        $recentscore = $row['playerscore'];
        $recentlevel = $row['playerlevel'];
        $sql = "UPDATE recent SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 7"; 
        mysqli_query($conn, $sql);

        $sql = "SELECT playername, playerscore, playerlevel FROM recent WHERE ID = 5";
        $result = $conn -> query($sql);
        $row = $result -> fetch_array(MYSQLI_ASSOC);
        $recentname = $row['playername']; 
        $recentscore = $row['playerscore'];
        $recentlevel = $row['playerlevel'];
        $sql = "UPDATE recent SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 6"; 
        mysqli_query($conn, $sql);

        $sql = "SELECT playername, playerscore, playerlevel FROM recent WHERE ID = 4";
        $result = $conn -> query($sql);
        $row = $result -> fetch_array(MYSQLI_ASSOC);
        $recentname = $row['playername']; 
        $recentscore = $row['playerscore'];
        $recentlevel = $row['playerlevel'];
        $sql = "UPDATE recent SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 5"; 
        mysqli_query($conn, $sql);

        $sql = "SELECT playername, playerscore, playerlevel FROM recent WHERE ID = 3";
        $result = $conn -> query($sql);
        $row = $result -> fetch_array(MYSQLI_ASSOC);
        $recentname = $row['playername']; 
        $recentscore = $row['playerscore'];
        $recentlevel = $row['playerlevel'];
        $sql = "UPDATE recent SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 4"; 
        mysqli_query($conn, $sql);

        $sql = "SELECT playername, playerscore, playerlevel FROM recent WHERE ID = 2";
        $result = $conn -> query($sql);
        $row = $result -> fetch_array(MYSQLI_ASSOC);
        $recentname = $row['playername']; 
        $recentscore = $row['playerscore'];
        $recentlevel = $row['playerlevel'];
        $sql = "UPDATE recent SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 3"; 
        mysqli_query($conn, $sql);

        $sql = "SELECT playername, playerscore, playerlevel FROM recent WHERE ID = 1";
        $result = $conn -> query($sql);
        $row = $result -> fetch_array(MYSQLI_ASSOC);
        $recentname = $row['playername']; 
        $recentscore = $row['playerscore'];
        $recentlevel = $row['playerlevel'];
        $sql = "UPDATE recent SET playername='$recentname', playerscore = '$recentscore', playerlevel = '$recentlevel' WHERE ID = 2"; 
        mysqli_query($conn, $sql);

        $sql = "UPDATE recent SET playername='$playername', playerscore = '$playerscore', playerlevel = '$playerlevel' WHERE ID = 1"; 
        mysqli_query($conn, $sql);
    }

    mysqli_close($conn);
?>


