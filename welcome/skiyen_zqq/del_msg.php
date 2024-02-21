<?php

if(isset($_POST['id'])){
	$id = $_POST['id'];
	include("../../conn.php");
	$del = mysqli_query($conn,"UPDATE $private_messages SET deleted = '1' WHERE id = '$id'");
}

?>