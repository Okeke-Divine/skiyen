<meta charset="utf-8">
<?php

include("../../conn.php");

if(isset($_POST['msg'])){
	$msg = mysqli_real_escape_string($conn,$_POST['msg']);
	if(empty($msg)){
			
	}else if($msg == "emoji"){

  $fetch_item = "SELECT * FROM $emoji";
  $fetched = mysqli_query($conn,$fetch_item);

  $emy = "";
  while($row = mysqli_fetch_array($fetched)){
    $emoji = "<span style='font-size:20px;'>&#".$row['code'].";</span>";
    $emy = $emy.$emoji;
  }
  echo reply_us($emy);

	}	else{
		?>

		<?php

			$query = mysqli_query($conn,"SELECT * FROM $chat_bot WHERE question = '$msg'");
			if(mysqli_fetch_assoc($query)){

				$query = mysqli_query($conn,"SELECT * FROM $chat_bot WHERE question = '$msg'");

				while($row = mysqli_fetch_array($query)){
					$an = $row['answer'];
					echo reply_us($an);
				}
			}else{
				$query = mysqli_query($conn,"SELECT * FROM $chat_bot WHERE `important` = '1' ORDER BY RAND() LIMIT 3");

			$qu1 = "";
			$m = 4;
				while($row = mysqli_fetch_array($query)){
					$m = $m - 1;
					$qu = $m."). ".$row['question']." ";
					$qu1 = $qu.$qu1;
				}
				echo reply_us("I do not understand you. Please try on of these:<br>".$qu1);	
			}

	}
}






function reply_us($text){
	$text1 = ' <div class="contrib" style="float: left;width: 70%;border-radius: 15px;display:flex!important;margin-bottom:10px;">
     <div class="card shadow-sm">
      <div class="card-header" style="background:#e6f0ff;">
      '.	$text.'
      </div>
  </div>
</div>';
	return $text1;
}

?>
