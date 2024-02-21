<script type="text/javascript">
  jQuery(document).ready(function(){
    $("time.timeago").timeago();
  });
  var sp = "select_btn_primary";
  function setp(btn,scroll){
    if(scroll!="noscroll"){
      window.location.hash="user_controls_div";
    }
    _('postbtn').classList.remove(sp);
    _('followersbtn').classList.remove(sp);
    _('followingbtn').classList.remove(sp);
    _(btn).classList.add(sp);
  }
  $(document).ready(function (){
    my_posts('noscroll');
  });
  function my_posts(info){
    if(info == 'noscroll'){
      setp('postbtn','noscroll');
    }else{
      setp('postbtn','scroll');
    }
    my_ajax('profile-right.php?my_id=<?php echo $my_id; ?>&for=<?php echo $for; ?>&my_profile_pic=<?php echo $my_profile_pic; ?>&my_uname=<?php echo $my_uname; ?>&uid=<?php echo $uid; ?>','s2394o234231','jquerytime');
  }
  function get_following(){
    my_ajax('profile-following.php?my_id=<?php echo $my_id; ?>','s2394o234231');
    setp('followingbtn','scroll');
  }
  function get_followers(){
    my_ajax('profile-followers.php?my_id=<?php echo $my_id; ?>','s2394o234231');
    setp('followersbtn','scroll');
  }
</script>

<style type="text/css">
	a{
		text-decoration: none;
	}
</style>
<script type="text/javascript">
      var ses_id = "<?php echo $ses_id; ?>";
  function follow(id){
      var cont = _(id+"main");
      var formdata = new FormData();
      formdata.append("id", id);
      var ajax = new XMLHttpRequest();
      // ajax.addEventListener("load",completeHandler,false);
      ajax.open("POST","follow.php");
      ajax.send(formdata);
      cont.innerHTML = '<button onclick="unfollow('+id+')" class="btn btn-primary">Following</button>';
  }
   function unfollow(id){
      var cont = _(id+"main");
      var formdata = new FormData();
      formdata.append("id", id);
      var ajax = new XMLHttpRequest();
      ajax.open("POST","unfollow.php");
      ajax.send(formdata);
      cont.innerHTML = '<button onclick="follow('+id+')" class="btn btn-light"><i class="fa fa-plus"></i> Follow</button>';
  }
  function _(el){
    return document.getElementById(el);
  }

  function like_post(id){
      var formdata = new FormData();
      formdata.append("id", id);
      var ajax = new XMLHttpRequest();
      // ajax.addEventListener("load",completeHandler,false);
      ajax.open("POST","../like.php");
      ajax.send(formdata);
      var unlikeagain = '<button id="'+id+'" class="btn btn text-primary tooltip_ski" data-tooltip="Unlike" style="display: flex;" onclick="unlike(id)"><i class="fa fa-thumbs-up"></i></button>';
      document.getElementById(id+"info_like").innerHTML = unlikeagain;
  }
   function unlike(id){
      var formdata = new FormData();
      formdata.append("id", id);
      var ajax = new XMLHttpRequest();
      // ajax.addEventListener("load",completeHandler,false);
      ajax.open("POST","../unlike.php");
      ajax.send(formdata);
      var likeagain = '<button id="'+id+'" class="btn btn tooltip_ski text-dark" style="display: flex;" data-tooltip="Like" onclick="like_post(id,ses_id)"><i class="fa fa-thumbs-up"></i></button>';
      document.getElementById(id+"info_like").innerHTML = likeagain;
  }
  function _(el){
    return document.getElementById(el);
  }
  function comment(post_id){
    var comment = _(post_id+"_comment_text").value;
      var comment_info = _(post_id+"_comment_info");
    if(comment.length > 0){
      var formdata = new FormData();
      formdata.append("comment", comment);
      formdata.append("id", post_id);
      var ajax = new XMLHttpRequest();
      ajax.open("POST","../comment.php");
      ajax.send(formdata);
      ajax.addEventListener("load",completeHandler,false);
    }else{
      var comment_info = _(post_id+"_comment_info");
      comment_info.style.display = "block";
      comment_info.innerHTML = "Empty";
      comment_info.style.transition = "2s";
    }
    function completeHandler(event){
        var comment_info = _(post_id+"_comment_info");
      comment_info.style.display = "block";
      comment_info.innerHTML = event.target.responseText;
    var comment = _(post_id+"_comment_text").value = "";
      comment_info.style.transition = "2s";
    }
  }
</script>
<script type="text/javascript">
	function popup(page,title){
		var xhttp;
		  xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		    	Swal.fire({
				  title: title,
				  html:this.responseText,
				  showCloseButton: true,
				  showCancelButton: false,
				  showConfirmButton: false
				});
		    }
		  };
		  xhttp.open("GET",page+"&profile_id=<?php echo $my_id; ?>", true);
		  xhttp.send();
}
function update_bio(){
	var bio = _('bio').value;
	var new_bio = _('my_bio');
	new_bio.innerHTML = bio;
	my_ajax('core/update-bio.php?bio='+bio+"&&profile_id=<?php echo $my_id; ?>",'scripts');
}

</script>