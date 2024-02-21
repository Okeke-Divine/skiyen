<?php

	if(isset($_GET['cbg'])){
		@$cbg = $_GET['cbg'];
		if(@$cbg == "true"){
			?>
			<script type="text/javascript">
				swal.fire(
					'Success',
					'Your chat background was successfully changed',
					'success'
				);
			</script>
			<?php
		}else if(@$cbg == "false"){
			?>
			<script type="text/javascript">
				swal.fire(
					'Error',
					'Your chat background was not changed',
					'error'
				);
			</script>
			<?php
		}
	}

	if(isset($_GET['ek'])){
		@$ek = $_GET['ek'];
		if(@$ek == "true"){
			?>
			<script type="text/javascript">
				swal.fire(
					'Success',
					'Your setting was successfully changed',
					'success'
				);
			</script>
			<?php
		}
	}

?>