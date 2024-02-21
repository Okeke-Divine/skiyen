<?php

session_start();
include("../conn.php");
include("ses.php");

if(isset($_POST['id'])){
$id = $_POST['id']; 
$liked = mysqli_query($conn,"
DELETE FROM $post_reactions WHERE post_id = '$id' and username = '$ses_uname' LIMIT 1
");
}

?>