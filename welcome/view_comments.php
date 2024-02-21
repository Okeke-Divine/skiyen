<!DOCTYPE html>
<html>
<head>
  <?php

  if(isset($_GET['date'])){

  session_start();
  @$search_id = $_GET['date'];
  include("../conn.php");
  include("ses.php");
  include("../css.php");
  ?>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/font/css/all.css">
  <script type="text/javascript" src="/js/jquery.js"></script>
  <script type="text/javascript" src="/js/jquery.timeago.js"></script>
  <title>Comment | <?php echo $site_name; ?></title>
</head>
<body>
<?php

 $data = mysqli_query($conn, "SELECT * FROM $user_post WHERE id = '$search_id'");

  while($row = mysqli_fetch_array($data)){
    $id = $row['id'];
    $uname = $row['username'];
    $uid = $row['user_id'];
    $type = $row['type'];
    $post = $row['post'];
    $image = $row['image'];
    $td = date("Y-m-d"." "."H:i:s",$row['time']);
    $post_num = strlen($post);
?>
<main class="container" role="main">
  <center>
    <div id="<?php echo $id; ?>_post_div" class="my-3 p-3 bg-white rounded shadow-sm" style="width: 97%;text-align: left;border:1px solid grey;">
    <div class="media text-muted pt-3">
      <h3 style="font-size: 20px;" class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <strong class="post_img">
          <?php
           $dat = mysqli_query($conn, "SELECT * FROM $user_table WHERE username = '$uname' LIMIT 0,1");
    

        ?>
        </strong>

        <div class="navbar">
          <button class="btn tooltip_ski" data-tooltip="Back" onclick="window.history.back()"><i class="fa fa-arrow-left"></i></button>
          <button class="btn fa fa-redo tooltip_ski" data-tooltip="Reload" onclick="get_comment('load')"></button>
        </div>

       </div>

            
     
<br>

  <div class="view_commentsijifdjfds" id="allcomments">


  </div>
      <div class="comment_container">
            <input type="text" class="form-control mt-2" name="comment_text" id="comment_text" onkeypress="com('<?php echo $id; ?>',event)" placeholder="Write a comment..." >
      </div>

        </div>
        </div>

  </div>

  </center>
</main>

<?php

  }

?>


<?php
}else{
  echo "404";
}


?>
<script type="text/javascript">
   jQuery(document).ready(function(){
      $("time.timeago").timeago();
    });
    function get_comment(type){
      var url = "../xhr/get_comment.php?id=<?php echo $id; ?>";
      if(type=="load"){
        my_ajax(url,'allcomments');
      }else{
       my_ajax2(url,'allcomments');
      }
    }
    get_comment('load');
   function comment(post_id){
    var foor = "<?php echo $uid; ?>";
    var comment = _("comment_text").value;
    var id = "<?php echo $id; ?>";
    if(comment.length > 0){
      my_ajax2("../xhr/ksdfos-comment.php?foor="+foor+"&comment="+comment+"&id="+id);
      _('comment_text').value = "";
      get_comment('noload');
      scroll_down('#allcomments');
    }
  }

  function com(post_id,event){
    var kc = event.code;
    if(kc == "Enter"){
      comment(post_id);
    }
  }

  $(document).ready(function(){
    $("#allcomments").css('max-height',screen.availHeight-300);
  });

</script>
<style type="text/css">
  html,body{
    background: black!important;
  }
</style>
