<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.css">
<?php

session_start();
$setted_group = $_SESSION['current_group_skiyen_inovec_drt454334rtrefgjfg7dfghagh8sghs_end_line'];


?>

	<link rel="stylesheet" type="text/css" href="../../../font/css/all.css">
<?php


include("../../../conn.php");
include("../../../css.php");
include("../../ses.php");
include("../../ver.php");
include("../../headers/home_group_chat.php");

?>
<!DOCTYPE html>
<html>
<body>
	<script type="text/javascript" src="/js/jquery.js"></script>
	<div class="all_div">
		<main role="main" class="container">
		<div id="lll">
		<br>
		<br>
		</div>
		</main>

<div id="content" style="width: 99%;"></div>
<center id="nk"><i class="fa fa-spinner fa-spin" style="font-size: 100px;"></i></center>

</div>


<div style="height:auto;width: 95%;display: block;" id="all_messages">
	
</div>

<div class="msg_area_input">

<button id="myBtn" style="width: 5%;" class="btn btn sdfsdf">&#128512;</button>
<input type="text" onkeypress="senda(event)" name="msg" placeholder="Type..." id="msg" class="form-control inp">
<button class="btn btn .upp" onclick="send_messsage()"><i class="fa fa-paper-plane"></i></button>
</div>


<div id="mo" class="mo">
  <div class="mo-content" style="">
    <span class="cls">&times;</span>
      <?php

  $fetch_item = "SELECT * FROM emoji";
  $fetched = mysqli_query($conn,$fetch_item);

  while($row = mysqli_fetch_array($fetched)){
    $emoji = $row['code'];
    ?>
    <span onclick="emoji('&#<?php echo $emoji; ?>;')" class="emoji">&#<?php echo $emoji; ?>;</span>
    <?php
  }

  ?>
  </div>

</div>


</body>
</html>
<script type="text/javascript">
		function senda(event){
	  var kc = event.code;
	  if(kc == "Enter"){
	  	send_messsage();
	  }
	}
	function send_messsage(){
			var msg = _('msg').value;
			var formdata = new FormData();
			formdata.append("message", msg);
			formdata.append("send", "send");
			var ajax = new XMLHttpRequest();
			ajax.open("POST","submit.php");
			ajax.send(formdata);
			_('msg').value = "";
			loadmess();
	}
	var t = setTimeout(loadinfo, 500);
	function loadinfo() {
	      document.getElementById("info").style.display = "block";
	      document.getElementById("send_action").style.display = "block";
	}
	var t = setTimeout(loadmess, 1000);
	function loadmess() {
		  var xhttp;
		  xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		    	_('nk').style.display = "none";
		    	_("content").innerHTML = linkify(this.responseText);
		    }
		  };
		  xhttp.open("GET", "load.php", true);
		  xhttp.send();

		var t = setTimeout(loadmess, 5000);
	}


	</script>


	<style type="text/css">
		.down{
			color: white;
			border-radius: 50%;
			padding: 10px;
			background: #0d6efd;
			position: fixed;
			bottom:+30px;
			right: 0;
			margin-bottom: 5px;
		}
		.up{
			color: white;
			border-radius: 50%;
			padding: 10px;
			background: #0d6efd;
			position: fixed;
			bottom:+30px;
			left: 0;
			margin-bottom: 5px;
		}
	</style>
	<script type="text/javascript">
		function _(el){
			return document.getElementById(el);
		}
		// $(window).scroll(function(){
		// 	const down = _('down');
		// 	down.style.display = 'block';

		// 		if($(window).scrollTop() >= $(document).height() - 	$(window).height() ){
		// 			const down = _('down');
		// 			down.style.display = 'none';
		// 		}
		// })
	</script>
  <?php
$time = date("h:i:sa");
$date = date("y/m/d");
include("../../../conn.php");
$query1 = "INSERT INTO $views VALUES('','1','$ses_uname','$time','$date',UNIX_TIMESTAMP())";
$data1 = mysqli_query($conn,$query1);
include("../../../js.php");
?>
<style type="text/css">
	.all_div{
		margin-left: 5px;
		margin-right: 5px;
	}
</style>
<script type="text/javascript">
	function delete_message(id){
	  var formdata = new FormData();
      formdata.append("id", id);
      var ajax = new XMLHttpRequest();
      ajax.open("POST","delete.php");
      ajax.send(formdata);
	}
	function copy_message(id){
		 var copyText1 = _(id+"_copy_message");
  		copyText1.select();
  		copyText1.setSelectionRange(0, 99999)
 		 document.execCommand("copy");
 		 _(id+"_info").innerHTML = "copied...";
	}
</script>


<br>
<br>
<br>
<script type="text/javascript">
  function _(el){
    return document.getElementById(el);
  }
  function emoji(item){
    _('msg').value += item+"";
  }
</script>

<script>
// Get the modal
var modal = document.getElementById("mo");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("cls")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function del_msg(id){
	var formdata = new FormData();
	formdata.append("id", id);
	var ajax = new XMLHttpRequest();
	ajax.open("POST","del_msg.php");
	ajax.send(formdata);	
}
</script>
