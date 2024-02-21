<div class="white br-5 p-2 wd100 wo_box_shadow">
	
<?php

$search_group = "SELECT * FROM $groups WHERE name LIKE '%$item%' && security != 'private'";
$ff = mysqli_query($conn,$search_group);
?>      
<?php
if(mysqli_fetch_assoc($ff)){

$search_groupp = "SELECT * FROM $groups WHERE name LIKE '%$item%' and security = 'public'";
	$fff = mysqli_query($conn,$search_groupp);
	?>          
    
    <?php
	while($group_row = mysqli_fetch_array($fff)){
		$gname = $group_row['name'];$privacy = $group_row['security'];
		$id = $group_row['id'];
		$des = $group_row['description'];
		$insert_searches1 = mysqli_query($conn,"INSERT INTO $some_searches VALUES('','$ses_uname','group','$id','$item','0',UNIX_TIMESTAMP())");
?>

<div class="view_box">
	<div class="alert alert-secondary">
		<?php echo $gname; ?>
		<br>
		<i><?php echo $des; ?></i>
	</div>
	<div class="btn_area">
		<button onclick="window.location ='../group/?into=<?php echo $gname; ?>';" class="btn btn-secondary">Join Group</button>
	</div>
</div>

<?php
}

}else{
	?>
	<br>
	<div class="text-dark wd100 text-center">
		<center>
			<div class="a0ka0dk empty_bg">
            	<img src="/logo/api3/group.png" alt="no user found(skiyen)" style="position: relative;top:2px;">
          	</div>
		</center>
		No group found for <b><?php echo $item; ?></b>
			<ul>
				<li>Check your spelling.</li>
				<li>Try searching for a smaller item.</li>
			</ul>
		</div>
	<?php	
}

?>

</div>