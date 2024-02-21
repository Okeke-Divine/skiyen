<div class="">
		

 <div class="contrib" style="width: 100%;border-radius: 15px;">
    
     <div class="card mb-4 shadow-sm">
    
      <div class="card-header">
	<button class="right btn btn" onclick="move_window('?action=edit');"><i class="fa fa-edit"></i> Edit Info</button>	
    
        <h4 class="my-0 font-weight-normal" style="text-align:left;color: black;">
        <i class="fa fa-info-circle" style="color:black;font-size: 25px;"></i>  <?php echo $ses_uname; ?>
          </h4>
      </div>
      <div class="card-body">

<?php

	$find_user_info = mysqli_query($conn,"SELECT * FROM $users_info WHERE user_id = '$ses_id'");
	if(mysqli_fetch_assoc($find_user_info)){

		$find_user_info = mysqli_query($conn,"SELECT * FROM $users_info WHERE user_id = '$ses_id'");

		while($ui = mysqli_fetch_array($find_user_info)){
			$s = $ui['state'];
			$c = $ui['country'];
			$b = $ui['bio'];
			$d = $ui['dob'];
			$l = $ui['likes'];
			$dl = $ui['dislikes'];
			$rs = $ui['relationship_status'];
			?>



<br>
			State: <?php echo $s; ?>
			<br>
			Country: <?php echo $c; ?>
<br>
			Bio: <?php echo $b; ?>

<br>
			Date Of Birth: <?php echo $d; ?>
<br>
			Likes: <?php echo $l; ?>
<br>
			Dislikes: <?php echo $dl; ?>

<br>
			Relationship Status: <?php echo $rs; ?>


			

			<?php
		}


	}else{
		echo "You do not have any info";
	}

?>


      </div>
  </div>
</div>
</div>

</div>