  <script type="text/javascript" src="../../js/jquery.js"></script>
  <script type="text/javascript" src="../../js/jquery.timeago.js"></script>
  
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"><?php session_start();include("../ver.php");include("../ses.php");include("../../conn.php");include("../../css.php");include("../headers/search.php");?>
<!DOCTYPE html>
<meta charset="utf-8">
<meta name="description" content="View who searches where you apperead and who search for them">
<html><head><link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css"><link rel="stylesheet" type="text/css" href="../../font/css/all.css"><title>Searches that i appeared . <?php echo $ses_uname; ?></title>
	</head><body>
<script type="text/javascript">
  jQuery(document).ready(function(){
    $("time.timeago").timeago();
  });
</script>
<br><main class="container" role="main">
<center>
<div class="my-3 p-3 bg-white rounded shadow-sm" style="width: 97%;text-align: left;">
    <div class="media text-muted pt-3">
      <h4 style="font-size: 20px;" class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <strong class="d-block text-gray-dark"><?php echo $ses_uname; ?> you appeared in search resuls (<span id="total">0</span>) times</strong>
        <br>
        <div style="height: 300px;overflow: auto;border:0.5px solid grey;padding:10px;">
        <?php

        $searches = mysqli_query($conn,"SELECT * FROM $some_searches WHERE item = '$ses_id' and item_type = 'user'");

        if(mysqli_fetch_array($searches)){
        	$total = 0;
        	$searches1 = mysqli_query($conn,"SELECT * FROM $some_searches WHERE item = '$ses_id' and item_type = 'user' ORDER BY id DESC");
        	while($search = mysqli_fetch_array($searches1)){
        		$wsf = $search['who_search_for'];
        		$sf = $search['searched_for'];
        		$total = $total + 1;
        		$td = date("Y-m-d"." "."H:i:s",$search['time']);
        		?>

        		<div class="comment_box">
                <div class="post_top"><?php echo $wsf; ?> searched for 
                <?php echo $sf; ?>
            	</div>
                <div class="">Time - <time class="timeago" datetime="<?php echo $td; ?>"><?php echo $td; ?></time>
                </div>
            	</div>
            	<br>

        		<?php
        	}
        	global $total;
        	?>
        	<script type="text/javascript">
        		document.getElementById('total').innerHTML = "<?php echo $total; ?>";
        	</script>
        	<?php

        }else{
        	echo "You have not appeared in any search";
        }

        ?>
    </div>
      </h4>
    </div>
  </div>
</center>

</main>
</body>
</html>