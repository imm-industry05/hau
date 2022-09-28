<?php
require_once('../include/header.php');
require_once('../include/dbcon.php');
?>
<?php
    $session_id =  $_SESSION['uid'];
    $from_user_id =  $_SESSION['uid'];
    $query= "SELECT * FROM `teacher` WHERE `id`='$session_id'";
    $run = mysqli_query($con,$query);
    $data = mysqli_fetch_assoc($run);
    $image = $data['image'];
    $name = $data['name'];
    $position = $data['position'];
?>
<?php
//post submiting to database sarver
if(isset($_POST['post'])){
    $content = htmlentities(mysqli_real_escape_string($con,$_POST['content']));
    $image_name = $_FILES['post_image']['name'];
    $temp_image_name =  $_FILES['post_image']['tmp_name'];
    $post_image = $_FILES['post_image'];
    move_uploaded_file($temp_image_name,"../img/$image_name");
    $query = "INSERT INTO `posts` (`from_user_id`,`content`,`image`) VALUES ('$from_user_id','$content','$image_name')";
    $run = mysqli_query($con,$query);
}
?>

<?php
//fetching post details from database server
    $query= "SELECT * FROM `posts` WHERE `from_user_id`='$from_user_id' order by post_id desc";
    $run = mysqli_query($con,$query);

?>

<?php
// Inserting Like Data 
$from_user_id =  $_SESSION['uid'];
if(isset($_POST['like']))
{
    $from_user_id =  $_SESSION['uid'];
    $post_id = $_POST['post_id'];
    $query = "INSERT INTO `likes` (`from_user_id`,`post_id`,`like_status`) VALUES ('$from_user_id','$post_id','1')";
}

?>
                                                    <?php
                                                        $query = "SELECT * FROM `likes` WHERE `from_user_id`='$from_user_id' AND `post_id` = '1' ";
                                                        $runs = mysqli_query($con, $query);  ?>

<style>
.card-profile-image {
  width: 110px;
  top: 180px;
  cursor: pointer;
  position:absolute;
}
.card-content{
    margin-top:-30px;
    height:120px;
}
</style>
      <!-- The Coding Has Been Started From Here -->

      <nav class="teal">
        <div class="container">
          <div class="nav-wrapper">
            <a href="" class="brand-logo center">Social Learnia</a>
            <a href="" class="button-collapse show-on-large" data-activates="sidenav"><i class="material-icons">menu</i></a>

          </div>        
        </div>
      </nav>


      <!-- The Dashboard Coding Started From Here -->

            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="card">
                        <div class="card-image">
                            <img src="../images/user-profile-bg.jpg" alt="" class="responsive-img "  style="height:250px;" >
                        </div>
                            <figure class="card-profile-image">
                                <img src="../img/<?php 
                                if(isset($image) && !empty($image)){
                                    echo $image;
                                }
                                else{
                                    echo "user.png";
                                }
                                ?>" alt="profile image" style="border-radius:50%;" class="circle z-depth-2 responsive-img activator">
                            </figure>
                        <div class="card-content">
                        <div class="row">
                            <div class="col m3 offset-m2 offset-l2 l3  s3 offset-s2">                        
                                <h4 class="card-title grey-text text-darken-4"><?php echo $name; ?></h4>
                                <p class="grey-text"><?php echo $position; ?></p>                        
                            </div>
                            <div class="col m2 s2 l2 center">
                                <h4 class="card-title grey-text text-darken-4">
                                    10+
                                </h4>
                                <p class="grey-text">Work Expreience</p>
                            </div>
                            <div class="col m2 s2 l2 center">
                                <h4 class="card-title grey-text text-darken-4">6</h4>
                                <p class="grey-text ">Complete Projects</p>
                            </div>
                            <div class="col m2 s2 l2 ">
                                <h4 class="card-title grey-text text-darken-4">
                                    $ 165
                                </h4>
                                <p class="grey-text">
                                    Business Profit
                                </p>
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Me Card  -->

            <div class="row">
                <div class="col l4 m12 s12">
                    <div class="card-panel blue darken-3 white-text">
                        <div class="card-title">
                            <h4>About Me!</h4>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias enim vitae inventore quas! Quia sit alias, in pariatur blanditiis doloribus quae totam odit, saepe dignissimos eum unde ut, voluptate illum?</span>
                        </div>
                    </div>

                    <div class="card">
                        <ul class="collection">
                            <li class="collection-item">Umair</li>
                            <li class="collection-item">Umair</li>
                            <li class="collection-item">Umair</li>
                        </ul>
                    </div>
                     <div class="card-panel orange">
                        <h5 class="white-text center"><i class="material-icons">person</i>3650</h5>
                        <p class="white-text center">Followers</p>
                    </div>
                </div>
                    <!-- Main Post Panel Starting From Here -->
                <div class="col l8 m12 s12" >
                        <nav>
                        </nav>
                                        <!-- User Image -->
                        <div class="col l12 m12 s12" style="background-color:#f5f5f5; margin-bottom: 20px;">
                                <div class="col l2 m2 s2" >
                                    <img src="../img/<?php 
                                if(isset($image) && !empty($image)){
                                    echo $image;
                                }
                                else{
                                    echo "user.png";
                                }
                                ?>" alt="" class="circle responsive-img" style="width:70px; margin:25px; margin-left:-8px;">
                                </div>
                                         <!-- Text Area Field -->
                                    <form method="POST" action="" enctype="multipart/form-data">
                                    <div class="col l10 m10 s10">
                                    <div class="input-field">
                                        <textarea name="content" required="required" id="textarea" cols="30" class="materialize-textarea" rows="10"></textarea>
                                        <label for="post">What's on your mind?</label>
                                    </div>
                                     <img id="blah" alt="" style="width:100px;"/>
                                </div>
                                <div class="col s6 m12 l12 left">
                                
                                <input id="fileButton" type="file" onchange="readURL(this);" name="post_image" class="hide"/>
                                <label for="fileButton"><i class="material-icons">camera_alt</i></label>

                                    <!-- <a href=""><i class="material-icons">camera_alt</i></a> &nbsp;
                                    <a href=""><i class="material-icons">person</i></a> &nbsp;
                                    <a href=""><i class="material-icons">sentiment_very_satisfied</i></a> &nbsp;
                                    <a href=""><i class="material-icons">location_on</i></a> -->
                                </div>
                                <div class="col s6 m12 l12 right-align">
                                <button class="btn red disabled"><i class="material-icons">public</i> Public</button>
                                    <button class="btn red z-depth-1" type="submit" name="post"><i class="material-icons">edit</i> POST</button>
                                </div>
                                         </form>
                        </div>
                </div>

                                <!-- Starting Post Printing Code From Here  -->

                                
                                                                                    <?php     
                                                    while ($data = mysqli_fetch_assoc($run)) {
                                                    $post_id = $data['post_id']; 
                                                    $content = $data['content'];
                                                    $post_image = $data['image'];
                                                    $timestamp = $data['timestamp'];
                                                    
                                                    
                                                ?>
                                    <div class="col s12 m12 l8 right">

                                    <div class="card">
                                        <div class="row" style="padding: 12px; padding-bottom: 0px; margin-top: -20px;">
                                            <div class="col s2 m2 l1">
                                                <img src="../img/<?php 
                                                if(isset($image) && !empty($image)){
                                                    echo $image;
                                                }
                                                else{
                                                    echo "user.png";
                                                }
                                                ?>" alt="" class="circle responsive-img" style="width:100%; margin:0px; padding:0px; ">
                                            </div>
                                            <div class="col l10 m9 s9">
                                                <p class="black-text text-darken-4 " style="margin-top:10px;"> <?php echo $name; ?></p>
                                                <p class="grey-text " style="margin-top:-18px; font-size:12px;'"> Shared publicly - <?php echo $timestamp; ?> </p>
                                            </div>
                                            <div class="col s1 m1 l1">
                                            <a href="#" data-activates="dropdown" class="dropdown-trigger"><i class="material-icons">expand_more</i> </a>
                                            <ul class="dropdown-content" id="dropdown" style="cursor:pointer;">
                                                <li><a href="">Edit</a></li>
                                                <li><a href="../include/delete_post.php?id=<?php echo $post_id; ?>">Delete</a></li>
                                            </ul>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:-40px; margin-bottom:-40px;">
                                            <div class="card-content">
                                            <div class="col s12 m12 l12">
                                                <p>
                                                <?php echo $content;  ?>
                                                </p>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="card-image" >
                                            <img src="../img/<?php echo $post_image;?>"  width="250" class="responsive-img " alt="" style="display:block; width:100%; height:100%; object-fit: cover; height:400px;">
                                        </div>
                                        <div class="row">
                                                <div class="card-action" >
<?php

                                                    if(mysqli_num_rows($runs)==0){?>
                                                    <div class="col s4 m4 l4 center "><a id="like" class=" blue-text btn  transparent z-depth-0"><i class="material-icons">thumb_up</i> Like (5)</a></div>
                                                    <?php                         
                                                    }  
                                                    else{ ?>

                                                    <div class="col s4 m4 l4 center "><a id="like" class=" blue-text btn  transparent z-depth-0"><i class="material-icons">thumb_down</i> Dislike (5)</a></div>
                                                    <?php

                                                    }  
                                                    ?>
                                                    <div class="col s4 m4 l4 center "><a onClick="expandAll();"  class="btn black-text transparent z-depth-0"><i class="material-icons">comment</i> Comment</a></div>
                                                    <div class="col s4 m4 l4 center "><a  class="btn black-text transparent z-depth-0"><i class="material-icons">share</i> Share</a></div>
                                                </div>
                                        </div>
                                        <ul class="collapsible">
                                                        <li>
                                                            <div class="collapsible-header hide"></div>
                                                            <div class="collapsible-body">asdfsa</div>
                                                        </li>
                                                    </ul>
                                    </div>                                       
                                </div>
                            <?php } ?>
            </div>
      <!-- The Navbar Menu Collection List -->
      <?php
require_once('../include/profile_sidenav.php');
?>
 <!-- Script For Displaying Post's Selected Image Before Uploading -->
    <script>
         function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

<script>
function expandAll(){
  $(".collapsible-header").addClass("active");
  $(".collapsible").collapsible({accordion: false});
}
</script>
<script>
$(document).ready(function(){
//when user click on like
$('.like').click(function(){
 var post_id = $(this).attr('id')
 alert('you clicked on ' + post_id)
});
});
</script>
      <?php
require_once('../include/footer.php');
?>