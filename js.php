<div class="skiyen_modal" id="skiyen_modal">
	  <div class="wd100 skiyen_moda_head skiyen_background text-white shadow-sm p-3 mb-2">
	  	<span id="skiyen_modal_title"></span>
		<span class="right">
			<span class="close_skiyen_modal fa-2x pointer" onclick="close_skiyen_modal()">&times;</span>
		</span>
	  </div>
	<main class="container" role="main">
	  <div class="wd100" id="skiyen_modal_content">
	  	
	  </div>
	</main>
</div>

<div id="xhttp_hidden" style="display: none!important;"></div>
<script type="text/javascript">
	var welcome_dir = "welcome/";
	function _(el){
		return document.getElementById(el);
	}
	function my_ajax(page,divid,type){
		var div = _(divid);
		var xhttp;
		div.innerHTML = "<span class='spinner-border text-primary'></span>";
		  xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
         	 div.innerHTML = this.responseText;
         	 if(type == "jquerytime"){
   				 $("time.timeago").timeago();
   			 }
		    }
		  };
		  xhttp.open("GET",page, true);
		  xhttp.send();
	}
	function my_ajax2(page,divid){
		var div = _(divid);
		var xhttp;
		  xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
         	 div.innerHTML = this.responseText;
		    }
		  };
		  xhttp.open("GET",page, true);
		  xhttp.send();
	}
	function last_activity(){
		var xhttp;
		  xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		    	// console.log('User active');
		    }
		  };
		  xhttp.open("GET","/welcome/last_activity.php", true);
		  xhttp.send();
		  setTimeout(last_activity,60000);
	}
	last_activity();
	

	function _(el){
		return document.getElementById(el);
	}
	var ph = _('profile_picture_height');
	var pw = _('profile_picture_width');
	var sps = ('set_profile_size');
	var upp = _('user_profile_picture');

	function set_size(){
		upp.style.height = ph.value;
		upp.style.width = pw.value;
	}

	function move_window(page){
		return window.location = page;
	}
	function prev_page(){
		return window.history.back();
	}
	function next_page(){
		return window.history.back();
	}
	function linkify(text) {
        var exp = /(\b(https?|ftp|file|):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
        return text.replace(exp, "<a href='$1' target='_blank' class='check_chat_link'>$1</a>");
        // linkify1(text);
    }
</script>

<script type="text/javascript">
  function scroller_btn(){
  var hideMe = _('upper_btn');
      $(document).ready(function(){

      $(window).scroll(function(){

        if($(window).scrollTop() <= 50){


          hideMe.style.opacity = "0";


        }else{

          hideMe.style.opacity = "1";

        }
 
      })

    })
  }
  function _cc(){
  	console.clear();
  }
  function goto(dir){
  	return window.location = dir;
  }
  function share_to_facebook(text){
    url = 'https://work.facebook.com/sharer.php?display=popup&u=' + window.location.href+"&t="+text;
    options = 'toolbar=0,status=0,resizable=1,width=626,height=436';
    window.open(url,'sharer',options);
}

</script>
<script type="text/javascript">
			function send_emoji(divid,value){
				_(divid).value += value;
			}
			function showemoji(){
			  var emojimodal = document.getElementById("skiyen_emoji_modal");
			    emojimodal.style.display = "block";
			}
			function closeemoji(){
			  var emojimodal = document.getElementById("skiyen_emoji_modal");
			    emojimodal.style.display = "none";

		}
		function scroll_down(div){
			$(div).scrollTop($(div)[0].scrollHeight);
		}
		function share_post(item){
		var xhttp;
		  xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {

		    }
		  };
		  xhttp.open("GET",item, true);
		  xhttp.send();	
		}
		function close_swal(){
			
		}
		function scroll_up(){
			$("html").animate({scrollTop:0});
		}
		var skiyen_modal = _('skiyen_modal');
		function close_skiyen_modal(){
			skiyen_modal.style.display = "none";
		}
		function open_skiyen_modal(title,content){
			skiyen_modal.style.display = "block";
			_('skiyen_modal_content').innerHTML = content;
			_('skiyen_modal_title').innerHTML = title;
		}
		
		  function get_do_you_know(){
    			my_ajax('/'+welcome_dir+'do_you_know.php','do_you_know');
  		}
  		function open_mess(id){
  			window.location = '/welcome/skiyen_zqq/add.php?rec='+id;
	  	}
	  	var site_whole_page = document.documentElement;
		function openFullscreen() {
		   if (site_whole_page.requestFullscreen) {
		    site_whole_page.requestFullscreen();
		   } else if (site_whole_page.mozRequestFullScreen) { /* Firefox */
		     site_whole_page.mozRequestFullScreen();
		  } else if (site_whole_page.webkitRequestFullscreen)  { /* Chrome, Safari and Opera */
		    site_whole_page.webkitRequestFullscreen();
		  } else if (site_whole_page.msRequestFullscreen)  { /* IE/Edge */
		    site_whole_page.msRequestFullscreen();
		  }
		}
		function closeFullscreen() {
		   if (document.exitFullscreen) {
		    document.exitFullscreen();
		   } else if (document.mozCancelFullScreen) { /* Firefox */
		     document.mozCancelFullScreen();
		  } else if (document.webkitExitFullscreen)  { /* Chrome, Safari and Opera */
		    document.webkitExitFullscreen();
		   } else if (document.msExitFullscreen) { /* IE/Edge */
		     document.msExitFullscreen();
		  }
		}
		function open_skiyen_post_page(add){
			var url = '/welcome/post/';
			goto(url+'?r=load'+add);
		}
		function set_post_textarea_style(type,bg,col){
			var textarea = _('skiyen_post_textarea');
			if(type == 'text'){
				_('me').innerHTML = 'What\'s on your mind '+bg;
				textarea.style.background = bg;
				textarea.style.color = col;
			}
		}
</script>