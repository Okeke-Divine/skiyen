<?php

	session_start();
  include("../../../conn.php");
  include("../../ses.php");
  include("../../ver.php");

  $query = mysqli_query($conn,"SELECT * FROM $todo_list WHERE user_id = '$ses_id'");
  if(mysqli_fetch_assoc($query)){
    
    $query = mysqli_query($conn,"SELECT * FROM $todo_list WHERE user_id = '$ses_id' ORDER BY id DESC");

    while($row = mysqli_fetch_array($query)){
      $item = $row['todo'];
      $md = $row['id'];
      ?>

      <button class="fodsjs wd100 btn btn text-left"><?php echo $item; ?>
        <span class="right do" onclick="dt('<?php echo $md; ?>')">x</span>
      </button>
      <?php
    }

  }else{
  	?>
<br>
	
	<div class="alert">
		No todo item found.
	</div>

  	<?php
  }

?>
