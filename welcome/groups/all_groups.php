<?php
session_start();
include("../../conn.php");
include("../ses.php");
include("../ver.php");
?>
<br>
<h4>My Groups</h4>


<div class="flexex">
<?php

$cg = mysqli_query($conn,"SELECT * FROM $groups WHERE owner='$ses_uname' ORDER BY RAND()");
$total = 0;
while($gr = mysqli_fetch_array($cg)){
	$total = $total+1;
$gname = $gr['name'];
		$privacy = $gr['security'];
		$id = $gr['id'];
		$des = $gr['description'];

?>


<div class="view_box vone" onclick="window.location ='../group/dst/add.php?rname=<?php echo $gname; ?>';">
	<div class="alert alert-secondary">
		<?php echo $gname; ?>
		<br>
		<i><?php echo $des; ?></i>
	</div>		
</div>
	<?php
}
if($total == 0){
	echo "You do not have any group";
}

?>
<br>
</div>

<h4>Groups</h4>
<br>
<div class="flexex">

<?php

$search_group = mysqli_query($conn,"SELECT * FROM $joined_groups WHERE user = '$ses_uname'");
$total = 0;

while($grs = mysqli_fetch_array($search_group)){
$total = $total + 1;
	$gnamee = $grs['gname'];
	
$search_groupp = mysqli_query($conn,"SELECT * FROM $groups WHERE name = '$gnamee' LIMIT 1");

while($group_row = mysqli_fetch_array($search_groupp)){
		$gname = $group_row['name'];
		$privacy = $group_row['security'];
		$id = $group_row['id'];
		$des = $group_row['description'];
}

	?>


<div class="view_box vone" onclick="window.location ='../group/dst/add.php?rname=<?php echo $gname; ?>';">
	<div class="alert alert-secondary">
		<?php echo $gname; ?>
		<br>
		<i><?php echo $des; ?></i>
	</div>		
</div>

	<?php
}


?>




</div>