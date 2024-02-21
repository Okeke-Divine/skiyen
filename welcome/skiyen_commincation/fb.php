<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
<?php session_start();include("../ver.php");include("../ses.php");include("../../conn.php");include("../../css.php");include("../../js.php");include("../headers/chat.php");?><!DOCTYPE html><html><head><link rel="stylesheet" type="text/css" href="../../font/css/all.css"><title>Chat . <?php echo $ses_uname; ?></title></head><body>
	<main class="container" role="main">
<br>


	
	<section class="whole_chat_box">
		
		<div class="users" id="users">
			<?php
			include("chat_for_users.php");
			?>
		</div>
		<div class="messages" id="messages">
			<main class="container" role="main">
				Click on a user to view chat.
			</main>
		</div>

	</section>
	<script type="text/javascript">
		var wheight = screen.availHeight-"230";
		_('users').style.height = wheight;
		function start_chat(id){

		}
	</script>



</main>
</body>
</html>