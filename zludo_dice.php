<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ludo</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/font/css/all.css">
</head>
<body>

	<center>
		<div id="dice_holder">
			Click to begin.
			<br>
			<br>
		</div>
		<button class="btn btn" onclick="load_dice();"><i class="fa fa-dice-d6 fa-2x"></i> Throw Dice</button>
	</center>


</body>
</html>

<script type="text/javascript">
	function load_dice(){
		var dice_holder = document.getElementById('dice_holder');
		var xhttp;
		  xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		    	dice_holder.innerHTML = this.responseText;	
		    }
		  };
		  xhttp.open("GET","zludo_dice_fetch.php", true);
		  xhttp.send();
	}
</script>