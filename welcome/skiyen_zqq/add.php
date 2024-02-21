<?php

include("../../conn.php");
include("../ses.php");
if(isset($_GET['rec'])){
	$rec = $_GET['rec'];
		if($rec == $ses_id){
			echo "<script>window.location = '../skiyen_comminicate.php'; </script>";
		}else{
			$user = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$rec'");
			while ($row = mysqli_fetch_array($user)) {
				$id = $row['id'];
				header("location:$id");
			}
		}
}

?>