
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../../font/css/all.css">
  <link rel="stylesheet" type="text/css" href="../../font/css/v4-shims.css">
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
  <?php
    session_start();
    include("../../conn.php");
    include("../ses.php");
    include("../ver.php");
    include("../../css.php");
    include("../headers/my_profile.php");
  ?>
  <title><?php echo $ses_uname; ?> | Post | <?php echo $site_name; ?></title>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

  <div class="my_def_body page_body">
<body>
    <main class="container" role="main">
  <br>
  <div class="home_cont">
    <div class="sug_menu" id="sug_menu">
      
     <?php
     include("../sidebar.php");
     ?>
    </div>

    <div class="post_menu mt-3">
      <main class="container" role="main">
        <div class="wd100 white br-5 text-dark p-3 wo_box_shadow">
      <span class="s9j3tmkef text-light">
        <i class="fa fa-bullhorn"></i>
        </span>

        Post
    </div>
      <?php include("post_page.php"); ?>
    </main>
    
    </div>
    <div class="dsfgkdsa030fo">
      <?php include("../right.php"); ?>
    </div>
  </div>

</main>
</body>


<script id="post_action_script" type="text/javascript">
  var modal = document.getElementById("mo");
  var file1 = _('file1');
  var post_smile = _('post_smile');
  var post_text = _('post_text');
  var post_camera = _('post_camera');
  var post_video = _('post_video');
  var post_users = _('post_users');
  var post_me = _('post_me');
  var ajax_upload_file_response = _('ajax_upload_file_response');
  var post_globe = _('post_globe');
  var ajax_file_response = _('ajax_file_response');
  var ajax_response = _('ajax_response');
  let main_btn_class = 'btn-info';
  var post_text_entry = _('post_text_entry');
  var post_complete = 0;

  _('post_smile').addEventListener('click',function(){
    modal.style.display = "block";
  });

  function post_privacy_click(donot,item){
    post_users.classList.remove(main_btn_class);
    post_me.classList.remove(main_btn_class);
    post_globe.classList.remove(main_btn_class);
    _(donot).classList.add(main_btn_class);
    _('privacy').value=item;
  }
  function post_type_click(donot,item){
    post_camera.classList.remove(main_btn_class);
    post_video.classList.remove(main_btn_class);
    post_text.classList.remove(main_btn_class);
    _(donot).classList.add(main_btn_class);
    _('post_type').value = item;
  }
  _('post_text').addEventListener('click',function(){
    post_type_click('post_text','text');
  });
  _('post_camera').addEventListener('click',function(){
    post_type_click('post_camera','image');
    file1.click();
  });
  _('post_video').addEventListener('click',function(){
    post_type_click('post_video','video');
    file1.click();
  });
  _('post_users').addEventListener('click',function(){
    post_privacy_click('post_users','followers');
  });
  _('post_me').addEventListener('click',function(){
    post_privacy_click('post_me','me');
  });
  _('post_globe').addEventListener('click',function(){
    post_privacy_click('post_globe','public');
  });
  function get_media_ready(){
    if(post_type.value == "image"){
     
      var file = _("file1").files[0];
      if(file.name == ""){}else{

          console.log(file.type);
        if(file.type == "image/png" || file.type == "image/jpeg"){
        
           ajax_upload_file_response.style.display = "block";
          var formdata = new FormData();
          formdata.append("file1",file);
          var ajax = new XMLHttpRequest();
          ajax.upload.addEventListener("progress", progressHandler, false);
          ajax.addEventListener("load",function (){
            _("progressBar").value = 100;
               post_complete = 1;
            ajax_upload_file_response.style.display = "none";
               ajax_file_response.innerHTML = this.responseText;
          },false);
          ajax.addEventListener("error",function (){
             _("status").innerHTML = "Upload Failed, please check your connection and try again.";
          },false);
          ajax.addEventListener("abort",function (){
            _("status").innerHTML = "Upload Aborted";
          },false);
          ajax.open("POST","img.ready.php");
          ajax.send(formdata);

        }else{
          post_complete = 0;
           ajax_response.innerHTML = poster_error('Image is not supported');
           clear_ajax_errors();
        }
        
      }

    }else if(post_type.value == "video"){
    	var file = _("file1").files[0];
      if(file.name == ""){}else{

          console.log(file.type);

        if(file.type == "video/mp4" || file.type == "video/webm"){
        
           ajax_upload_file_response.style.display = "block";
          var formdata = new FormData();
          formdata.append("file1",file);
          var ajax = new XMLHttpRequest();
          ajax.upload.addEventListener("progress", progressHandler, false);
          ajax.addEventListener("load",function (){
            _("progressBar").value = 100;
            ajax_upload_file_response.style.display = "none";
               ajax_file_response.innerHTML = this.responseText;
               post_complete = 1;
          },false);
          ajax.addEventListener("error",function (){
             _("status").innerHTML = "Upload Failed, please check your connection and try again.";
          },false);
          ajax.addEventListener("abort",function (){
            _("status").innerHTML = "Upload Aborted";
          },false);
          ajax.open("POST","video.ready.php");
          ajax.send(formdata);

        }else{
          post_complete = 0;
           ajax_response.innerHTML = poster_error('Video is not supported');
           clear_ajax_errors();
        }
    }
  }
}
 function progressHandler(event){
      _("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
      var percent = (event.loaded / event.total) * 100;
      _("progressBar").value = Math.round(percent);
      _("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
    }
    function completeHandler(event){
      _("progressBar").value = 100;
      _("status").innerHTML = "Upload Complete";
    }
  function emoji(item){
    _('post_text_entry').value += item+"";
  }
  function poster_error(value){
    return "<div class='m-1 alert alert-danger'>"+value+"</div>";
  }
  _('create_post').addEventListener('click',function (){

    if(post_type.value == "text"){
       if(post_text_entry.value == ""){
           ajax_response.innerHTML = poster_error('Post is empty');
          clear_ajax_errors();
       }else{
        post_complete = 1;
        if(post_complete == 1){
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              post_created(this.responseText);
              ajax_response.innerHTML = this.responseText;
            }
          };
          xhttp.open("POST", "create_post_text.php?text="+post_text_entry.value+"&&privacy="+privacy.value, true);
          xhttp.send();
        }
      }
    }else if(post_type.value == "image"){
      if(post_complete == 1){
        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              post_created(this.responseText);
             ajax_response.innerHTML = this.responseText;
            }
          };
          xhttp.open("POST", "create_post_image.php?text="+post_text_entry.value+"&&privacy="+privacy.value, true);
          xhttp.send();
      }
    }
    else if(post_type.value == "video"){
    if(post_complete == 1){
        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             ajax_response.innerHTML = this.responseText;
            post_created(this.responseText);
            }
          };
          xhttp.open("POST", "create_post_video.php?text="+post_text_entry.value+"&&privacy="+privacy.value, true);
          xhttp.send();
      }
    }else{
      ajax_response.innerHTML = poster_error('Error creating post');
      clear_ajax_errors();
    }

  });
  function clear_ajax_errors(){
      setTimeout(clear_ajax_errors_main,7000);
  }
  function clear_ajax_errors_main(){
    ajax_response.innerHTML = "";
  }
  function post_created(msg){
    var form_div = _('sdfkgsdfg');
    var suv_div = _('sdfdsfo');
    form_div.innerHTML = "";
    form_div.style.display = "none";
    suv_div.innerHTML = msg;
  }
  var modal = document.getElementById("emoji_modal");

var btn = document.getElementById("myBtn1");

var span = document.getElementsByClassName("cls")[0];


span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</html>

<?php

echo "<span style='display:none;'>";
mkdir('../post_images_1123s/'.$ses_id.'_post_images');
echo "</span>";
?>
<?php

echo "<span style='display:none;'>";
mkdir('../post_videos_issmims/'.$ses_id.'post_videos');
echo "</span>";
?>

<?php
include("post_entry_points.php");
?>