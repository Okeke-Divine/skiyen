<?php


	$find = mysqli_query($conn,"SELECT * FROM $helpcenter_question WHERE deleted = '0' && question like '%$item%'  ORDER BY id DESC");

	$total = 0;
	while($he = mysqli_fetch_array($find)){
		$total = 1+$total;
		$hq = $he['question'];
		?>
		<div class="media text-muted pt-3 search_result" onclick="continue_search('<?php echo $hq; ?>')">
    		<?php echo $hq; ?>
			</div>
		<?php
	}
	if($total == 0){
		?>
		<div class="media text-muted pt-3 search_result" onclick="continue_search('<?php echo $item; ?>')">
    		<?php echo $item; ?>...
			</div>
		<?php
	}

?>