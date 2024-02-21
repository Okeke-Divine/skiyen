<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"><?php session_start();include("ver.php");include("ses.php");include("../conn.php");include("../css.php");include("headers/home.php");?><!DOCTYPE html><html><head><link rel="stylesheet" type="text/css" href="../css/main.css"><link rel="stylesheet" type="text/css" href="../font/css/all.css"><title>Home . <?php echo $ses_uname; ?></title></head><body>
  <main role="main" class="container"><br><br>
<span id="demo"></span>
<div class="loader" id="load"></div>
<br>
<script type="text/javascript">
var t = setTimeout(loadDoc, 4000);
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		document.getElementById("load").style.display = "none";
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET.html", "main.php", true);
  xhttp.send();
	var t = setTimeout(loadDoc, 1000);
}
</script></main></body></html>
<div id="filter"><a href="#" class="btn btn_ses">Oldest</a><a href="#latest" class="btn btn_ses">Latest</a></div>
<div id="latest"></div>