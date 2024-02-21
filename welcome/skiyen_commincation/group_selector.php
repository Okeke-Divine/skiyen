<?php

	$joined_group = mysqli_query($conn, "SELECT * FROM $joined_groups WHERE user = '$ses_uname'");

		if(mysqli_fetch_assoc($joined_group)){
			$joined_group1 = mysqli_query($conn, "SELECT * FROM $joined_groups WHERE user = '$ses_uname'");

			while($jointed = mysqli_fetch_array($joined_group1)){
				$joinded_gname = $jointed['gname'];
				$joinded_id = $jointed['id'];
			     $cid = "SELECT * FROM $joinded_gname WHERE date != '1'";
			    $nut = mysqli_query($group_connection_server,$cid);
			    $total = 0;
			    if(mysqli_fetch_assoc($nut)){
			      while($message_row = mysqli_fetch_array($nut)){
			        $total = (int)1+$total;
			        if($total > 999){
			          $totall = '999+';
			        }else{
			          $totall = $total;
			        }
			        global $total;
			      }
			      }else{
			      		$del = mysqli_query($conn,"DELETE FROM $joined_groups WHERE id = '$joinded_id' LIMIT 1");
					}
				?>
				<button class="btn btn chat_btn" onclick="window.location = '../group/dst/add.php?rname=<?php echo $joinded_gname; ?>'">
						 <?php echo "s"; ?></i> <?php echo $joinded_gname; ?> - (<?php echo $total; ?>)
					</button>
					<br>
				<?php
			}



		}else{
			?>
			<button class="btn btn">When your have an message they will appear here.</button>
			<?php
		}
	

		?>