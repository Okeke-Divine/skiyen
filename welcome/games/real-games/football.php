<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
<?php session_start();
include("../../ver.php");include("../../ses.php");include("../../../conn.php");include("../../../css.php");include("../../../js.php");include("../../headers/settings.php");?>
<!DOCTYPE html><html><head><link rel="stylesheet" type="text/css" href="../../font/css/all.css"><title>Games . (<?php echo $ses_uname; ?>)</title></head><body>


	<main class="container" role="main">
<br>
		<h3>Football</h3>
		<label text="text-danger" style="color:red;">Liverpool</label>
		<i>Vs</i>
		<label text="text-dark">Juventus</label>
		<br>
		<label for="time">Select Time</label>
		<select id="time" class="form-control">
			<option>Custom</option>
			<option onclick="window.location = 'real-games/foosball/?time=02';">02:00</option>
			<option onclick="window.location = 'real-games/foosball/?time=05';">05:00</option>
			<option onclick="window.location = 'real-games/foosball/?time=10';">10:00</option>
			<option onclick="window.location = 'real-games/foosball/?time=15';">15:00</option>
		</select>

	</main>


</body>
</html>