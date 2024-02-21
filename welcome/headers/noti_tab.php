<?php

$totalq = 0; 
$uqery = mysqli_query($conn,"SELECT * FROM $follow_notification WHERE notification_owner = '$ses_id' and viewed = '0'");
while($re = mysqli_fetch_assoc($uqery)){
	$totalq = $totalq + 1;
}

if($totalq > 0){
	$llllll = '<i class="fa fa-circle inform"></i>';
}else{
	$llllll = "";
}

?>
<li> <button class="tooltip_ski" onclick="window.location = '<?php echo $noti; ?>.php';" data-tooltip="(<?php echo $totalq; ?>) Notification" id="btn_bell"> <?php if($totalq > 0){

	?>

     <?php echo $llllll; ?>


	<?php

}?><i class="fas fa-bell"></i></button></li>
