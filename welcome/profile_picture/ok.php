<?php
session_start();
$id = $_SESSION['user_id_skiyen_bot_one'];
//this php code is hidden and recieves data from an ajax send method
$filename = $_FILES["file1"] ["name"]; //the file name
$fileTmpLoc = $_FILES["file1"] ["tmp_name"]; //file in the php tmp folder
$fileType = $_FILES["file1"] ["type"]; //the file type
$fileSize = $_FILES["file1"] ["size"]; //the size in byte
$fileErrorMsg = $_FILES["file1"] ["error"]; //0 for false 1 for true

if(!$fileTmpLoc){
	//if file is not chosen
	echo "Error : you can not upload an empty file";
	exit();
}
//if the file uploads
   $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
        if(move_uploaded_file(($fileTmpLoc), "../all_user_profile_pic/$filename")){
				echo "<br>$filename upload complete<br>";
				include("../../conn.php");
				$sql = "UPDATE users SET profile_pic = '$filename' WHERE id = '$id'";
				if (mysqli_query($conn, $sql)) {
					echo "Your profile picture has been saved";
				} else {
					echo "Your profile was uploaded but was not saved please try again later";
				}
			} 
			//if file does not upload
			else{
				echo "move_uploaded_file function failed";
			}
			?>
			<?php
 } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

?>