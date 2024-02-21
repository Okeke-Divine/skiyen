	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/font/css/all.css">

<?php

function rand_dice(){
	$rand = rand(1,6);
	if($rand == 1){
		$fa = 'one';
	}else if($rand == 2){
		$fa = 'two';
	}
	else if($rand == 3){
		$fa = 'three';
	}
	else if($rand == 4){
		$fa = 'four';
	}else if($rand == 5){
		$fa = 'five';
	}else{
		$fa = 'six';
	}

	return '
	<button class="btn btn">
	<i class="fa fa-dice-'.$fa.' fa-3x"></i>
	</button>';

}
echo rand()."<br>";
echo rand_dice();
echo rand_dice();

?>
