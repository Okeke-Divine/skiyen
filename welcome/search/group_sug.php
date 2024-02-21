<?php
?>
<?php
$query_users = mysqli_query($conn,"SELECT * FROM $groups WHERE name like '%$item%'");
		if(mysqli_fetch_assoc($query_users)){

		$query_users = mysqli_query($conn,"SELECT * FROM $groups WHERE name like '%$item%' and security = 'public'");
		while($row_user = mysqli_fetch_array($query_users)){
			$my_uname = $row_user['name'];
			?>

    		<div class="media text-muted pt-3 search_result" onclick="continue_search('<?php echo $my_uname; ?>')">
    		<?php echo $my_uname; ?>
			</div>


			<?php
		}


		}else{
			?>

			<div class="media text-muted pt-3 search_result" onclick="continue_search('<?php echo $item; ?>')">
    		<?php echo $item; ?>...
			</div>

			<?php
		}

		?>