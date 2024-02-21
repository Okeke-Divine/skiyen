	<link rel="stylesheet" type="text/css" href="../../../font/css/all.css">
<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.css">

<?php
session_start();
$go = $_SESSION['current_group_skiyen_inovec_drt454334rtrefgjfg7dfghagh8sghs_end_line_owner'];
include("../../ver.php");
include("../../ses.php");
include("../../../conn.php");
include("../../../css.php");
include("../../headers/home_group_chat.php");
if($ses_uname = $go){
?><script type="text/javascript" src="../../../js/jquery.js"></script>
   <main class="container" role="main">
   		<div class="overlay"></div>
   	<section class="post_area">
      <title><?php echo $null;?></title>
      <div class="text" style="max-height: 300px;overflow: auto;">
      	<h3>Group Admin - <?php echo $null; ?></h3>

  





  <form action="action.php" method="POST">

        <input type="hidden" name="id" value="<?php echo $group_id_one; ?>">
        
        <button type="submit" name="edit-pri" class="btn btn-secondary">Edit Group Privacy</button>
    </form>

 <form action="action.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $group_id_one; ?>">
        <button type="submit" name="delete" class="btn btn-danger">Delete Group</button>
      </form>

  </div>
</section>
  </main>
<?php
}else{
	echo $su." you are not the group admin please refresh this page if you are the group admin";
}
?>
<script type="text/javascript">
  $(document).ready(function () {
  $(".text").click(function () {
    $(".overlay").fadeIn(500);
  });
  $(".overlay").not(".text").click(function() {
    $(".overlay").fadeOut(500);
  });
});
</script>