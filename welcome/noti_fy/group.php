<?php

if(isset($_GET['name']))

	$name = $_GET['name'];
	header("location:../group/dst/add.php?rname=$name");

?>