<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../font/css/all.css">
</head>
<?php session_start();
include("../../conn.php");
include("../../css.php");
include("../ses.php");
include("../ver.php");
include("../headers/settings.php");
?>
	<title><?php echo $ses_uname; ?> | Skibot | Skiyen</title>
<body>
<br>
<main class="container">
	
	<section class="chat_bot balanced_div">
		<center>
			<div class="cont143" id="cont143">
				<div class="topper">
					Skibot
				</div>
					<div class="msg_cont" id="msg_cont">
					</div>
					<div class="input_cont form-control">
						<div class="form-control ino">
							<input type="text" id="msg" placeholder="Message..." name="msg" class="form-control iijdjd" style="display: inline-flex;width: 70%;">
							<button class="btn btn-primary iijdjd1" id="send_btn" onclick="dfgdfgdfgdf()"><i class="fa fa-paper-plane"></i></button>
						</div>

					</div>
			<!-- <a class="nav-link" href="../contact_us/">Leave a message instead.</a>
							<button class="btn btn" onclick="cmsg()"><i class="fa fa-redo" style="color: white;"></i></button>
			 -->
			</div>
		</center>

	</section>

</main>

</body>
</html>
<script type="text/javascript">
	// var div,wh
	// div = _('cont143');
	// wh = screen.availHeight - 700;
	// div.style.height = wh;

	function dfgdfgdfgdf(){
			 var xhttp,send_btn;
			 var send_btn = _('send_btn');
		  xhttp = new XMLHttpRequest();
		  	var msg = _('msg').value;
			var formdata = new FormData();
			formdata.append("msg", msg);
			var ajax = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
         	 _("msg_cont").innerHTML +=  linkify(this.responseText);
		  		var msg = _('msg').value = "";
		    }
		  };
		  xhttp.open("POST", "an.php");
		  xhttp.send(formdata);
		  var my_msg = '<div class="contrib" style="float: right;width: 70%;border-radius: 15px;margin-top:10px;margin-bottom:10px;"><div class="card  shadow-sm"><div class="card-header">'+msg+'</div></div></div>';
		  if(msg == ""){
		  	console.log('Empty message');
		  }else{
		  	_('msg_cont').innerHTML += my_msg;
		  }
	}	
	function cmsg(){
		var clear;
		var clear = _('msg_cont');
		clear.innerHTML = "";
	}
	
</script>
<style type="text/css">
	.contrib{
		text-align: left;
	}
</style>