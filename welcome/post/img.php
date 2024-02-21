
<?php
session_start();
include("../ver.php");
include("../../conn.php");
include("../ses.php");
include("../../css.php");
include("../headers/my_profile.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../../font/css/all.css">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
  <title>Post . <?php echo $ses_uname; ?></title>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
  <script type="text/javascript" src="../../js/jquery.js"></script>
  <script type="text/javascript" src="../../js/jquery1.js"></script>
  <script type="text/javascript" src="../../js/jquery-ui.js"></script>    
<html>
  <head>
  </head>
  <body>
    <section class="post_area">
      <div class="text">
        <h4>Text And Image</h4>
        <form action="" method="POST" enctype="multipart/form-data">
<?php
 $pp = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$ses_id'");
          while($row_pp = mysqli_fetch_assoc($pp)){
            $pp1 = $row_pp['profile_pic'];
            if($pp1 == ""){
              ?>
<i class="fa fa-circle" style="font-size: 40px;"></i>
              <?php
            }else{
              ?>
              <img src="../all_user_profile_pic/<?php echo $pp1; ?>" alt="<?php echo $ses_uname; ?> profile picture" class="home_img">
              <?php
            }
          }
            ?>

        <input name="con" class="form-control" id="message" placeholder="What's in your mind">
        <input name="fileToUpload" required="" class="form-control" id="fileToUpload" type="file">
         <input class="btn-primary" type="submit" name="post" value="Post"/>
  </form>
    

      </div>
    </section>
    <div class="overlay"></div>
  </body>
  <?php

if(isset($_POST['post'])){
  $con = $_POST['con'];

    $file_name =  "skiyen-img-".rand().basename( $_FILES["fileToUpload"]["name"]);

$target_dir = "../post_images_1123s/".$ses_id."_post_images/";
$target_file = $target_dir . $file_name;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

         $query = "INSERT INTO $user_post VALUES('','$ses_uname','$con',UNIX_TIMESTAMP(),'image','$file_name','','')";
  $dato = mysqli_query($conn,$query);

  if($dato){
    echo "<script>window.location = '../my_profile.php';</script>";
  }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



 
}

?>
</html>



<script type="text/javascript">
  $(document).ready(function () {
  $(".text").click(function () {
    $(".overlay").fadeIn(500);
  });
  $(".overlay").not(".text").click(function() {
    $(".overlay").fadeOut(500);
  });
});
</script>

