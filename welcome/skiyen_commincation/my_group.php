<?php

$check_group = mysqli_query($conn, "SELECT * FROM $groups WHERE owner = '$ses_uname'");

if(mysqli_fetch_assoc($check_group)){
	?>
	<div class="glon">
		<h4>My Group</h4>
		<p>
			<?php

			$my_group = mysqli_query($conn, "SELECT * FROM $groups WHERE owner = '$ses_uname' ORDER BY id DESC");			

			while($row = mysqli_fetch_array($my_group)){
				$gname = $row['name'];

				  $c = "SELECT * FROM $gname WHERE date !='1'";
			    $n = mysqli_query($group_connection_server,$c);
			    $all = 0;
			      while($message_row = mysqli_fetch_array($n)){
			        $all = $all+1;
			        if($all > 999){
			          $totall1 = '999+';
			        }else{
			          $totall1 = $tota;
			        }
			        global $total1;
			      }
				?>
				<a href="../group/dst/add.php?rname=<?php echo $gname; ?>" class="post_link">
					<div style="display: flex;color: black;">
						(<?php echo $all; ?>) <?php echo $gname; ?>
					</a>
					</div>
					<br>
				<?php
			}

			?>
		</p>
	</div>
	<?php
}else{
	?>
	<div class="glon">
		You have not created any group
	</div>
	<?php
}

?>