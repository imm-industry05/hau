<?php
    require_once('config.php');
    session_start();

    //Sign in
    if(isset($_POST['signin']))
    {   
        $email=mysqli_real_escape_string($conn, $_POST["email"]);
        $password=mysqli_real_escape_string($conn,$_POST["password"]);
        $sql="Select * from userdata where email='".$email."'AND password='".$password."' limit 1";  
        $result=mysqli_query($conn,$sql);

        if(mysqli_fetch_assoc($result))
        {
            $_SESSION["email"]=$email;
            header("location:admin.php");
        }
        else
        {
        ?>          
            <script>
                alert('The Email or password you entered is incorrect.');
                window.location ='book_now.php';
            </script>
        <?php   
	    } 
    }

    //Sign up
    if(isset($_POST['signup']))
    {
        $name=$_POST["name"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        
        $sql = "INSERT INTO userdata (name, email, password, type) 
	    VALUES ('$name', '$email', '$password', 'User')";
    
        if ($conn->query($sql) === TRUE){
        ?>
            <script>
                alert('You have successfully registered!');
                window.location ='book_now.php';
            </script>
        <?php
        }
        else{
        ?>
            <script>
                alert('The Email is already taken. Please choose another email.');
                window.location ='book_now.php';
            </script>
        <?php
        }
    } 

    //Feedback
    if(isset($_POST['feedback']))
    {   
        $fb=$_POST["fb"];
        $suggestion=$_POST["suggestion"];
        $name=$_POST["name"];
        $email=$_POST["email"];

        $sql = "INSERT INTO feedback (id, fb, suggestion,name,email) 
        VALUES ('', '$fb', '$suggestion','$name','$email')";   
        $result=mysqli_query($conn,$sql);
            
        if ($result==true){
            ?>
                <script>
                    alert("Feedback Submitted!");
                    window.location ='feedback.php';
                </script>
            <?php
            }
        elseif($result==false)
        {
        ?>
            <script>
                alert("Feedback Failed to submit");
                window.location ='feedback.php';
            </script>
        <?php
        }
        else{
        ?>
            <script>
                alert('Feedback error');
                window.location ='feedback.php';
            </script>
        <?php
        }
    }
 
    //Feedback Delete
    if (isset($_GET['deletefeedback']))
    {
        $result = $conn->query("SELECT * FROM feedback") or die ($conn->error);
        $id = 'id';
        $name = '';
        $email = '';
        $fb ='';
        $suggestion ='';

        $id = $_GET['deletefeedback'];
        $conn->query("DELETE FROM feedback WHERE id = '$id'") or die($conn->error);
        
        ?>          
        <script>
            alert('Feedback Deleted!');
            window.location ='feedback_messages.php';
        </script>
        <?php
    }

    //Update user account
    if (isset($_POST['updateuser'])){

		$name = $_POST["name"];
        $type = $_POST["type"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];

        $id=$_GET['id'];

        if ($password === $cpassword) {
            $sql = "UPDATE userdata SET name='$name', type='$type', email='$email', password='$password' WHERE id='$id'";
            $result = mysqli_query($conn, $sql);
            ?>          
                <script>
                    alert('Your account was successfully updated');
                    window.location ='users_management.php';
                </script>
            <?php
        } else {
            ?>          
                <script>
                    alert("Those passwords didn't match. Try again.");
                    window.location ='users_management_edit.php';
                </script>
            <?php
        }
    }

    //User account delete
    if (isset($_GET['deleteuser'])){
        
        $id = 'id';
        $name = '';
        $type = '';
        $email = '';
        $password = '';

        $id = $_GET['deleteuser'];
        $conn->query("DELETE FROM userdata WHERE id = '$id'") or die($conn->error);     
        ?>          
        <script>
            alert('The account was successfully deleted!');
            window.location ='users_management.php';
        </script>
        <?php
    }
     
    //Add User
    if(isset($_POST['adduser']))
    {   
        $password=$_POST["password"];
        $cpassword=$_POST["cpassword"];

        if($password===$cpassword){
        $name=$_POST["name"];
        $type=$_POST["type"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        
        $sql = "INSERT INTO userdata (id, name, type, email, password) 
        VALUES ('', '$name', '$type','$email','$password')";   
        $result=mysqli_query($conn,$sql);
            
        if ($result==true){
            ?>
                <script>
                    alert("New user account added!");
                    window.location ='users_management.php';
                </script>
            <?php
            }
            elseif($result==false)
            {
            ?>
                <script>
                    alert("Failed to add new user!");
                    window.location ='users_management_add.php';
                </script>
            <?php
            }
            else{
            ?>
                <script>
                    alert('Add user error!');
                    window.location ='users_management_add.php';
                </script>
            <?php
            }
        }else{
            ?>          
                <script>
                    alert("Those passwords didn't match. Try again.");
                    window.location ='users_management_add.php';
                </script>
            <?php
        }
    }

    //update admin profile
    if (isset($_POST['updateadminprofile'])){
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];

            if ($password === $cpassword) {
                $name = $_POST["name"];
                $email = $_POST["email"];
                $password = $_POST["password"];

                $sql = "UPDATE userdata SET name='$name', email='$email', password='$password' WHERE email='{$_SESSION["email"]}'";
                $result = mysqli_query($conn, $sql);
                
                if ($result==true){
                ?>          
                    <script>
                        alert('Your account was successfully updated!');
                        window.location ='admin_account_settings.php';
                    </script>
                <?php
                }else{
                    ?>          
                    <script>
                        alert('Failed to update your account!');
                        window.location ='admin_account_settings.php';
                    </script>
                <?php 
                }
            } else {
                ?>          
                    <script>
                         alert("Those passwords didn't match. Try again.");
                        window.location ='admin_account_settings.php';
                    </script>
                <?php
            }
    }

    //update user profile
    if (isset($_POST['updateuserprofile'])){
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];

            if ($password === $cpassword) {
                $name = $_POST["name"];
                $email = $_POST["email"];
                $password = $_POST["password"];

                $sql = "UPDATE userdata SET name='$name', email='$email', password='$password' WHERE email='{$_SESSION["email"]}'";
                $result = mysqli_query($conn, $sql);
                
                if ($result==true){
                ?>          
                    <script>
                        alert('Your account was successfully updated!');
                        window.location ='user_account_settings.php';
                    </script>
                <?php
                }else{
                    ?>          
                    <script>
                        alert('Failed to update your account!');
                        window.location ='user_account_settings.php';
                    </script>
                <?php 
                }
            } else {
                ?>          
                    <script>
                         alert("Those passwords didn't match. Try again.");
                        window.location ='user_account_settings.php';
                    </script>
                <?php
            }
    }

    //Standard Hoteli Room Book
    if (isset($_POST['booknow1'])){

		$book = "Standard Hoteli Room";
        $dnt1 = $_POST["dnt1"];

		$conn->query("UPDATE userdata set book='$book', dnt='$dnt1'  Where email='{$_SESSION["email"]}'")
        or die($conn->error);
        ?>          
        <script>
            alert('Your choose was successfully booked!');
            window.location ='user.php';
        </script>
        <?php
    }

    //Junior Hoteli Room Book
    if (isset($_POST['booknow2'])){

		$book = "Junior Hoteli Room";
        $dnt2 = $_POST["dnt2"];

		$conn->query("UPDATE userdata set book='$book', dnt='$dnt2'  Where email='{$_SESSION["email"]}'")
        or die($conn->error);
        ?>          
        <script>
            alert('Your choose was successfully booked!');
            window.location ='user.php';
        </script>
        <?php
    }

    //Presidential Hoteli Room
    if (isset($_POST['booknow3'])){

		$book = "Presidential Hoteli Room";
        $dnt3 = $_POST["dnt3"];

		$conn->query("UPDATE userdata set book='$book', dnt='$dnt3'  Where email='{$_SESSION["email"]}'")
        or die($conn->error);
        ?>          
        <script>
            alert('Your choose was successfully booked!');
            window.location ='user.php';
        </script>
        <?php
    }

    //Penthouse Hoteli Room
    if (isset($_POST['booknow4'])){

		$book = "Penthouse Hoteli Room";
        $dnt4 = $_POST["dnt4"];

		$conn->query("UPDATE userdata set book='$book', dnt='$dnt4'  Where email='{$_SESSION["email"]}'")
        or die($conn->error);
        ?>          
        <script>
            alert('Your choose was successfully booked!');
            window.location ='user.php';
        </script>
        <?php
    }

    //Honeymoon Hoteli Room
    if (isset($_POST['booknow5'])){

		$book = "Honeymoon Hoteli Room";
        $dnt5 = $_POST["dnt5"];

		$conn->query("UPDATE userdata set book='$book', dnt='$dnt5'  Where email='{$_SESSION["email"]}'")
        or die($conn->error);
        ?>          
        <script>
            alert('Your choose was successfully booked!');
            window.location ='user.php';
        </script>
        <?php
    }

    //Bridal Hoteli Room
    if (isset($_POST['booknow6'])){

		$book = "Bridal Hoteli Room";
        $dnt6 = $_POST["dnt6"];

		$conn->query("UPDATE userdata set book='$book', dnt='$dnt6'  Where email='{$_SESSION["email"]}'")
        or die($conn->error);
        ?>          
        <script>
            alert('Your choose was successfully booked!');
            window.location ='user.php';
        </script>
        <?php
    }

    //Delete Booked
    if (isset($_GET['deletebook'])){
    
        $id = $_GET['deletebook'];
        $conn->query("UPDATE userdata set book='', dnt=0 WHERE id = '$id'") or die($conn->error);     
        ?>          
        <script>
            alert('The booked was successfully deleted!');
            window.location ='book_reserve_listed.php';
        </script>
        <?php
    }
?>