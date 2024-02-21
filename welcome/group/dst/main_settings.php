<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.css">
<?php

session_start();
$go = $_SESSION['current_group_skiyen_inovec_drt454334rtrefgjfg7dfghagh8sghs_end_line_owner'];


?>

<script type="text/javascript" src="../../../js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="../../../font/css/all.css">
<?php


include("../../ver.php");
include("../../ses.php");
include("../../../conn.php");
include("../../../css.php");
include("../../headers/home_group_chat.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Group Settings . (<?php echo $null; ?>)</title>
</head>
<body>
<main role="main" class="container">

	<?php

	if(isset($_GET['action'])){
		$action = $_GET['action'];
		if($action == "leave-group"){
			include("pages/leave-group.php");
		}




		else{
		?>
	<script type="text/javascript">
		window.location = 'group-settings';
	</script>
<?php	
		}
	}else{
?>
	<script type="text/javascript">
		window.location = 'group-settings';
	</script>
<?php
	}

	?>

</main>
</body>
</html>