<?php

	include("../../conn.php");
	include("../../function.php");
	session_start();
	include("../ses.php");
	$starred_msg = mysqli_query($conn,"SELECT * FROM $private_starred_message WHERE user_id = '$ses_id' ORDER BY id DESC");
	
	while($row = mysqli_fetch_assoc($starred_msg)){
		$message_id = $row['message_id'];

		$msg_cont = mysqli_query($conn,"SELECT * FROM $private_messages WHERE id = '$message_id'");

		while($mh = mysqli_fetch_array($msg_cont)){
			$sen =  $mh['sender'];
			$vh = $mh['viewed'];
			$reci =  $mh['reciever'];
			$cont =  $mh['content'];
			$deleted = $mh['deleted'];
			$mid = $mh['id'];
			$username = get_user_main($sen,'username');
            $image_src = get_user_main($sen,'profile_pic');
            $username1 = $username;
            if($username == $ses_uname){
            	$username1 = "me";
            }

			?>
			<div class="contrib m-1 wd100">
		     <div class="card me hadow-sm wd100">
		      <div class="card-header wd100">
		      	
		      	<img src="../all_user_profile_pic/<?php echo $image_src; ?>?r=<?php echo $image_src; ?>" alt="<?php echo $username; ?>" class="my_nav_img">  
		      	<i class="text-grey"><?php echo $username1; ?></i> - 

		      	<b><?php echo $cont; ?></b>
		      	<span class="right"><i class="fa fa-star"></i></span>
		      </div>
		  	 </div>
			</div>
			<?php

		}


	}


?>