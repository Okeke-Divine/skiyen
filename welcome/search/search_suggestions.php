<span class="right pointer closure" onclick="close_div()">&times;</span>
<?php

$item = $_REQUEST['zqq'];
$ns = $_REQUEST['ns'];
if(empty($item)){

}else{
	include("../../conn.php");
	if($ns == "a"){
		include("user_sug.php");
	}else if ($ns == "u") {
		include("user_sug.php");
	}else if($ns == "f"){
		include("forum_sug.php");
	}
}

?>