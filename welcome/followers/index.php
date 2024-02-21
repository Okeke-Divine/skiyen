<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">

<?php 
session_start();
include("../ses.php");
include("../../conn.php");
include("../../css.php");
include("../headers/search.php");

$id = $_GET['sdgjsdigjsdigsd'];
$name = $_GET['sdfgsdfg'];

$ver = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$id' and username = '$name'");

if(mysqli_fetch_assoc($ver)){

?>


<!DOCTYPE html>
<html><head><link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css"><link rel="stylesheet" type="text/css" href="../../font/css/all.css">
	<title>Followers . Skiyen</title>
</head><body><br>
	<?php
$ver1 = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$id' and username = '$name'");
while($following = mysqli_fetch_array($ver1)){
		$uname = $following['username'];
		$id_uname = $following['id'];
	?>
	<center>
 <div class="my-3 p-3 bg-white rounded shadow-sm" style="width: 97%;text-align: left;">
    <div class="media text-muted pt-3">

      <h4 style="font-size: 20px;" class="media-body pb-3 mb-0 small lh-125 border-gray">
        <strong class="d-block text-gray-dark"><?php echo $uname; ?> - 
        	<?php 


        	   $mainf1 = mysqli_query($conn,"SELECT * FROM $followers WHERE following = '$id_uname'");
		$tot = 0;
	        while($foll = mysqli_fetch_assoc($mainf1)){
	        	$tot = $tot + 1;
	        	global $tot;
	        }
	        echo $tot." followers";


        	?>
        </strong>
        <br>
        <?php

        $mainf = mysqli_query($conn,"SELECT * FROM $followers WHERE following = '$id_uname'");

        if(mysqli_fetch_assoc($mainf)){
        $mainf2 = mysqli_query($conn,"SELECT * FROM $followers WHERE following = '$id_uname' ORDER BY id DESC");

	        while($foll = mysqli_fetch_assoc($mainf2)){
	        	$foreign = $foll['user_id'];
	        	$profile = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$foreign'");
	        	while($pro = mysqli_fetch_array($profile)){
	        		$uname_pro = $pro['username'];
	        		?>

	        		 <div class="comment_box" style="padding-top: 20px;padding-bottom: 40px;">
                  		<?php echo $uname_pro; ?> 
                  		<div style="float: right;"><a href="../profile/?view=<?php echo $uname_pro; ?>" class="btn btn_ses"><i class="fa fa-plus-circle" style="color: inherit;"></i> View Profile</a></div>
              		</div>

	        		<?php
	        	}
	        }

        }else{
        	echo "No followers";
        }

        ?>
    </div>
  </div>
</center>

<?php
}
?>

	<?php
$time = date("h:i:sa");
$date = date("y/m/d");
$query1 = "INSERT INTO $views VALUES('','1','$ses_uname','$time','$date',UNIX_TIMESTAMP())";
$data1 = mysqli_query($conn,$query1);

?>

<?php

}else{
	echo '<script>window.location = "../search";</script>';
}

?>
