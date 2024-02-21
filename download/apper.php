<br>
<script type="text/javascript">
	function download(){
		window.location = "?q=download-skiyen";
	}
</script>
<main class="container" role="main">
	<h4>Tired of coming to the web? Download Skiyen's mobile app for your os and enjoy.</h4>
	<div class="flexex">
		

	<div class="view_box">
		<div class="alert alert-secondary">

			<span style="display: none;">1</span>Skiyen <i>lite</i> for andriod. <i>v1.0</i>
			<br>
			<button class="btn btn-primary" onclick="window.location = '?q=download-skiyen&&ac=1';">Download .apk
				<span class="badge badge-light">
					
					<?php

					echo download_num('1');


					?>

				</span>
			</button>
		</div>
	</div>


	</div>
</main>

<?php

	if(isset($_GET['ac'])){
		$ac = $_GET['ac'];
		if($ac == "1"){
	
		$down = mysqli_query($conn,"SELECT * FROM $download_app_num WHERE app = 1 LIMIT 1");

		while($numbers = mysqli_fetch_array($down)){
			$truenum = $numbers['number'];
			$new = 1 + $truenum;
			$ded = $numbers['des'];
		}
			$down = mysqli_query($conn,"UPDATE $download_app_num SET `number` = '$new' WHERE app = 1");		
			
			// echo "<script>window.location = 'main/$ded';</script>";	
			// echo "<script>setTimeout(download,5000);</script>";	
		
		?>
		<script type="text/javascript">
			window.location = "main/<?php echo $ded; ?>";
			setTimeout(download,5000);
		</script>
		<?php
		}else{
			download();
		}
	}
	function download_num($app){
		include("../conn.php");
		$new = "";
		$s = mysqli_query($conn,"SELECT * FROM $download_app_num WHERE app = '".$app."' LIMIT 1");

		while($a = mysqli_fetch_array($s)){
			$new = $a['number'];
		}
		return $new;
	}

?>