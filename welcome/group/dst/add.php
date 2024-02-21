<?php
if(isset($_GET['rname'])){
	$rname = $_GET['rname'];
	session_start();
	$_SESSION['current_group_skiyen_inovec_drt454334rtrefgjfg7dfghagh8sghs_end_line'] = $rname;
		include("../../../conn.php");
	include("../../ses.php");
	$checker = mysqli_query($conn,"SELECT * FROM $groups WHERE name = '$setted_group'");

	if(mysqli_fetch_assoc($checker)){
		
		$joined_groups_check = mysqli_query($conn, "SELECT * FROM $joined_groups WHERE user = '$ses_uname' and gname = '$setted_group'");

	if(mysqli_fetch_assoc($joined_groups_check)){
		$joined_groups_add = mysqli_query($conn, "UPDATE
			$joined_groups
			SET time = UNIX_TIMESTAMP()
			WHERE uname = '$ses_uname' and gname = '$setted_group'");
	}else{
		$joined_groups_add = mysqli_query($conn, "INSERT INTO $joined_groups VALUES ('', '$ses_uname', '$setted_group', UNIX_TIMESTAMP())");
	}
	echo '<script>window.location = "../dst";</script>';
	}else{
		echo "not found";
		echo '<script>window.location = "../../search";</script>';
	}
}

?>