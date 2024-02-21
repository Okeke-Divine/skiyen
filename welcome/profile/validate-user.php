<?php
          

//check if user has a user info
$ui = mysqli_query($conn, "SELECT * FROM $users_info WHERE user_id = '$my_id'");
if(mysqli_fetch_assoc($ui)){}else{
  $uia = mysqli_query($conn,"
    INSERT INTO $users_info (`user_id`) VALUES ('$my_id')
    ");
}


?>