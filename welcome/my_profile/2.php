<title>Saving...</title>
<h3>Saving please wait...</h3>
<?php
if(isset($_POST['edit'])){

$content = $_POST['con'];
$id = $_POST['id'];

include("../../conn.php");



$sql = "UPDATE $user_post SET post = '$content' WHERE id = '$id'";

if (mysqli_query($conn, $sql)) {
	mysqli_close($conn);
	echo "<script>window.location = 'index.php';</script>";
} else {
	echo "<script>window.location = 'index.php';</script>";
}


}
else{
	header("location:index.php#id");
}
?> 