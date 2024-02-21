<?php
include("../../conn.php"); 
if(isset($_POST['del'])){
	$id = $_POST['id'];
	$que = "DELETE FROM $user_post WHERE $user_post.`id` = $id LIMIT 1";
	$data = mysqli_query($conn,$que);

	$comment = mysqli_query($conn,"DELETE FROM $post_comments WHERE post_id = '$id'");

	$likes = mysqli_query($conn,"DELETE FROM $post_reactions WHERE post_id = '$id'");

	echo "<script>window.location = 'index.php';</script>";
	


} ?>