<?php
require('config.php');
?>

<?php

    if(isset($_POST)){
        
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $contactnumber= $_POST['contactnumber'];
        $password = sha1($_POST['password']);
    
    
        $sql = "INSERT INTO users(firstname,lastname,username,contactnumber,password) VALUES(?,?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$firstname,$lastname,$username,$contactnumber,$password]);
    
        if ($result){
        echo 'Successfully saved.';
    }
    else {
        echo 'There were errors while saving the data.';
    }
}