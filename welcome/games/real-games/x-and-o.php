<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
<script type="text/javascript" src="../../js/jquery.js"></script>
<meta charset="utf-8">
<?php
session_start();
$game_name = "X and O";
include("game_info.php");
include("../../../js.php");
include("../../ses.php");
include("../../ver.php");
?>
<section class="ski_game">
<div class="cont" id="cont">
<div id="game_cont"><?php include("x-and-o-loader.php"); ?></div>

<div id="main_game" style="display: none;"><?php include("x-and-o-main.php"); ?></div>

<script type="text/javascript">
    setTimeout(load_game,5000);
    function load_game(){
      _('game_cont').style.display = "none";
      _('main_game').style.display = "block";
    }
</script>
</div>
</section>