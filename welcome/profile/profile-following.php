<div class="br10 bg-white shadow-sm p-2">
	<span class="dokdfsokefmfdfsw3"><b>Following</b></span><br>
<?php

session_start();
@$my_id = $_GET['my_id'];
$lim = 10000;
include("../../conn.php");
include("../ses.php");
include("../ver.php");
include("../../function.php");
get_following($lim,$my_id,'nolimit');
?>
</div>