<?php

echo skiyen_locate_time_ago('2016-03-21 05:58:00');

function skiyen_locate_time_ago($timestamp){
	$time_ago = strtotime($timestamp);
	$current_time = time();
	$time_diffrence = $current_time - $time_ago;
	$seconds = $time_diffrence;
	$minutes = round($seconds / 60);
	$hours = round($seconds / 3600);
	$days = round($seconds / 86400);
	$weeks = round($seconds / 604800);
	$months = round($seconds / 2629440);
	$years = round($seconds / 31553280);

	if($seconds <= 60){
		return "Just now";
	}
	else if($minutes <= 60){
		if($minutes==1){
			return "one minute ago";
		}else{
			return "$minutes minutes ago";
		}
	}
	else if($hours <=1){
		if($hours==1){
			return "an hours ago";
		}else{
			return "$hours hrs ago";
		}
	}
	else if($days <= 7){
		if($days==1){
			return "yesterday";
		}else{
			return "$days days ago";
		}
	}
	else if($weeks <= 4.3)// 52/12
		if($weeks==1){
			return "a week ago";
		}else{
			return "$weeks weeks ago";
		}
	}
	else($months <= 12){
		if($minutes==1){
			return "one month ago";
		}else{
			return "$months months ago";
		}
	}
	else{
		if($years==1){
			return "one year ago";
		}else{
			return "$years year ago";
		}
	}

}

?>