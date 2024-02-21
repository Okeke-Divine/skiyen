<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Download | Skiyen</title>
	<?php

	include("../conn.php");
	include("../css.php");

	$a1 = "";

	if(isset($_GET['q'])){
		$q = $_GET['q'];
		if($q == "download-skiyen"){
			$a1 = "active_ski";
		}else{
			download();
		}
	}else{
		download();
	}
	function download(){
		header("location:?q=download-skiyen");
	}

	?>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../font/css/all.css">
</head>
<body>

<header>
        <nav_skiyen>
            <ul>
	                
                <li> <a class="<?php echo $a1; ?>" data-tooltip="Skiyen App | Download" href="?q=download-skiyen" id="home"> <i class="fas fa-download"></i> </a> </li>
                
                <li id="space2"></li>
                
                <!-- <li> <a class="tooltip_ski active_ski" data-tooltip="Home" href="<?php echo $home; ?>.php" id="home"> <i class="fas fa-home"></i> </a> </li> -->
                <!-- <li> <a class="data-tooltipip_ski" data-tooltip="Find people" href="<?php echo $find_people; ?>.php" id="group"> <i class="fas fa-user-friends"></i> </a></li> -->



                <!-- <li> <a class="tooltip_ski vidddd" data-tooltip="Videos" href="<?php echo $videos; ?>.php" id="group"> <i class="fas fa-play-circle"></i> </a></li> -->
                


                <!-- <li> <a class="tooltip_ski" data-tooltip="Menu" href="<?php echo $settings; ?>.php" id="friend"> <span style="font-size: 30px;">&#9776;</span> </a> </li> -->
                <li id="space1"></li>
              
                
                
            </ul>
        </nav_skiyen>
    </header>


    <?php

			include("apper.php");

    ?>

</body>
</html>