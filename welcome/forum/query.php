<?php

	if(isset($_POST['ask'])){
		$ask = $_POST['ask'];
		$alen = strlen($ask);
		$errors = array();
		if($alen < 20){
			$errors[] = 'You question can not be less than 20 charaters.';
		}

		if(empty($errors)){
			$query = mysqli_query($conn,"INSERT INTO $helpcenter_question (`user_id`,`question`,`deleted`,`closed`,`time`)VALUES ('$ses_id', '$ask', '0', 'open',UNIX_TIMESTAMP());");
			if($query){
				echo write::alert_success('You question has been posted');
				$ask = "";
			}else{
				echo write::alert_danger('Error will trying to post your question.');
			}
		}else{
			$errs = implode(",", $errors);
			echo write::alert_error($errs);
		}
	}

?>