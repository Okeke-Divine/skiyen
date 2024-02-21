<?php

$totalq = 0; 
$uqery = mysqli_query($conn,"SELECT * FROM $private_messages WHERE reciever = '$ses_id' and viewed = '0'");
while($re = mysqli_fetch_assoc($uqery)){
	$totalq = $totalq + 1;
}

if($totalq > 0){
	$llllll = '<i class="fa fa-circle inform"></i>';
	$totalq = "New";
}else{
	$llllll = "";
}

?>
       


<li> <button class="tooltip_ski" onclick="window.location = '<?php echo $chat; ?>.php';" data-tooltip="(<?php echo $totalq; ?>) Messages" id="btn_bell" style="color: grey;">
   <?php echo $llllll; ?>
<i class="fas fa-comment"></i></button></li>