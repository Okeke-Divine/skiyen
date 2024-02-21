<?php

if(isset($_POST['change'])){
    session_start();
    include("../../conn.php");
    include("../ses.php");

$target_dir = "../all_chat_bg/";
$new_f_name = "skiyen-chat-bg".date("hisadmy").basename($_FILES["fileToUpload"]["name"]);

$target_file = $target_dir . $new_f_name;
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
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    header("location:index.php?cbg=false");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
        $ucimg = mysqli_query($conn,"SELECT * FROM $user_global_settings WHERE user_id = '$ses_id' and settings = 'chat_background' and settings_value != ''");

        if(mysqli_fetch_assoc($ucimg)){
            
            mysqli_query($conn,"UPDATE $user_global_settings SET settings_value = '$new_f_name' WHERE user_id = '$ses_id' and settings = 'chat_background'");

        }else{
            mysqli_query($conn,"INSERT INTO $user_global_settings VALUES (NULL,'$ses_id','chat_background','$new_f_name')");
        }  

    header("location:index.php?cbg=true");


    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}else{
    header("location:index.php");
}
?>