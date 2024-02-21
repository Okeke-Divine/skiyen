<script type="text/javascript">
function close_sitelon(){
  _('sitelon').style.display = 'none';
}
function open_sitelon(){
  _('sitelon').style.display = 'block';
}
function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}

const message_sent = new Audio();
message_sent.src = '/assets/audios/send_message.m4a?r=cache_me';
  function senda(event){
    var kc = event.code;
    if(kc == "Enter"){
      send_messsage();
    }
  }
  function message_settings(id){
    close_stickers();
    Swal.fire({
          html:"<span class='spinner-border text-primary'></span>",
          showCloseButton: false,
          showCancelButton: false,
          showConfirmButton: false  
    });
    var xhttp;
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          Swal.fire({
          html:this.responseText,
          showCloseButton: true,
          showCancelButton: false,
          showConfirmButton: false
        });
        }
      };
      xhttp.open("GET","message_settings.php?smid="+id, true);
      xhttp.send();
  }
  function view_message(load_time){
      var xhttp;
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          // document.getElementById("all_msg").innerHTML = this.responseText;
           // var message = link;
           var down = "<br><br><br>";
            _("all_msg").innerHTML = linkify(this.responseText)+down;
           if(load_time == 'page_load_first'){
              scroll_down(_('all_msg'));
              scroll_down(_('body'));
              close_sitelon();
           }
        }
      };
      xhttp.open("GET", "rec_msg.php?ses_rec_id=<?php echo $ses_rec_id; ?>&&ses_rec_uname=<?php echo $ses_rec_uname; ?>", true);
      xhttp.send();
    setTimeout(view_message,15000);
  }
  function send_sticker(name){
      open_sitelon();
      var xhttp;
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        message_sent.play();  
        if (this.readyState == 4 && this.status == 200) {
          close_sitelon();
          // close_stickers();
          view_message();
        }
      };
      xhttp.open("GET", "../skiyen_zqq/display-emojis/send-sticker.php?ses_rec_id=<?php echo $ses_rec_id; ?>&&sticker_name="+name, true);
      xhttp.send();
  }
  function send_messsage(){
    var msg = _('msg').value;
    //   var xhttp;
    //   xhttp = new XMLHttpRequest();
    //   xhttp.open("GET", "input_msg.php?msg="+msg+"&&rec=<?php echo $ses_rec_id; ?>", true);
    //   xhttp.send();
    // _('msg').value = "";
      var formdata = new FormData();
      formdata.append("msg", msg);
      formdata.append("rec", "<?php echo $ses_rec_id; ?>");
      var ajax = new XMLHttpRequest();
      ajax.open("POST","input_msg.php");
      ajax.send(formdata);
      if(msg != ""){
        message_sent.play();
      }
      _('msg').value = "";
      view_message('other');
  }

  view_message('page_load_first');
  

     
</script>
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
	_(id+"msgbox").innerHTML = "<i>This message has been deleted</i>";	
}
function copy_msg(){
  	_('dsifjsdf').innerHTML = '<i class="fa fa-clipboard"></i> <span class="nss">Copied</span>';
		var copyText1 = _("ofksdof");
  		copyText1.select();
  		copyText1.setSelectionRange(0, 99999)
 		 document.execCommand("copy");
}
function star(id){
  my_ajax('star_msg.php?id='+id+"&&action=star",'xhttp_hidden');
  message_settings(id);
}
function unstar(id){
  my_ajax('unstar_msg.php?id='+id+"&&action=unstar",'xhttp_hidden');
  message_settings(id);
}
_('all_msg').style.height = (window.innerHeight-50)+'px';

function load_stickers(){
  _('dfes').style.display = 'block';
}
function close_stickers(){
  _('dfes').style.display = 'none';
}
function open_chat_emoji(){
  my_ajax('display-emojis/emoji.php','emoji_content_box');
}
function open_chat_gif(){
  my_ajax('display-emojis/gif.php','emoji_content_box');
}
function open_chat_sticker(){
  my_ajax('display-emojis/sticker.php','emoji_content_box');
}
function load_user_info(){
   Swal.fire({
      html:'<center><img src="../all_user_profile_pic/<?php echo $ses_rec_pp; ?>" alt="<?php echo $ses_rec_uname; ?>\'s profile picture on skiyen" class="skiyen-user-info-img"><br><br><b><?php echo $ses_rec_uname; ?></b></center><br><div class="skiyen-ui-container"><button class="btn btn"><i class="fa fa-comment"></i><br>Chat</button><button class="btn btn"><i class="fa fa-phone-alt"></i><br>Audio</button><button class="btn btn"><i class="fa fa-video"></i><br>Video</button></div>',
      showCloseButton: true,
      showCancelButton: false,
      showConfirmButton: false  
  });
}
function load_user_settings(){
    Swal.fire({
          html:"<span class='spinner-border text-primary'></span>",
          showCloseButton: false,
          showCancelButton: false,
          showConfirmButton: false  
    });
   var xhttp;
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          Swal.fire({
          html:this.responseText,
          showCloseButton: true,
          showCancelButton: false,
          showConfirmButton: false
        });
        }
      };
      xhttp.open("GET","user-setting.php?rec_id=<?php echo $ses_rec_id; ?>", true);
      xhttp.send(); 
}
function block_user(id){

}
</script>