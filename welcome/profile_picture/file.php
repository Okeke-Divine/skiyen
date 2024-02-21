<?php

session_start();
$id = $_SESSION['user_id_skiyen_bot_one'];

$new_name = "skiyen-".date('YmdHis')."-".basename($_FILES["file1"]["name"]);
$target_dir = "../all_user_profile_pic/";
$target_file = $target_dir . $new_name;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file1"]["tmp_name"]);
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
    echo "Sorry, file already exists.<br>Rename your file and try again<br>";
    $uploadOk = 0;
}
// Check file size
// if ($_FILES["file1"]["size"] > 500000) {
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
    echo "Sorry, your picture was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file)) {
        include("../../conn.php");
        $filename = $_FILES["file1"]["name"];
        $sql = "UPDATE $user_table SET profile_pic = '$new_name' WHERE id = '$id'";
        if (mysqli_query($conn, $sql)) {
                    echo "Your profile picture has been saved.";
                    $_SESSION['user_pp'] = $new_name;
					setcookie('skiyen_user_pp', $new_name, time()+60*60*900);

                } else {
                    echo "Your profile was uploaded but was not saved please try again later";
                }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
