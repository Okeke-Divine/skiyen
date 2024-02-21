  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"><?phpif($_SESSION['mode'] == "light"){  ?><style type="text/css">::-webkit-scrollbar { width: 10px;}/* Track */::-webkit-scrollbar-track{  border-left:1px solid black;}/* Handle */::-webkit-scrollbar-thumb {background: #888; }/* Handle on hover */::-webkit-scrollbar-thumb:hover {background: #555;}.loader{background: lightgrey;}.can{border:1px solid black; }.pos_box{ border:1px solid black;   }.pos_link,.pos_link:hover{color: black;text-decoration: none;    }.user_pro{border:1px solid rgb(150,150,150);}.btn_ses{background:#6c757d;color: white;} .glon{ box-shadow: 0 0 0 0.01rem rgb(60,60,60);}.glon:hover{ box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);}.access_btn{ background: transparent;}.fa{color: black!important;}  #navbar { background-color: #f2f2f2;  border: 1px solid black;}#navbar .link { color: #333;}#navbar .link:hover, #navbar .active {background-color: #ddd;color: black;}</style><?php}if($_SESSION['mode'] == "dark"){?>  <style type="text/css">/* width */::-webkit-scrollbar {width: 10px;}/* Track */::-webkit-scrollbar-track { border-left:1px solid #f1f1f1;}/* Handle */::-webkit-scrollbar-thumb {background: #888; }/* Handle on hover */::-webkit-scrollbar-thumb:hover {background: #555; }#navbar {  background-color: #333;}#navbar .link {  color: #f2f2f2;}.can{  border:1px solid white;color: inherit; }html,body{color: white!important;background: black!important;}.glon{color: white!important;border:2px solid white!important;box-shadow: 0 0 0 0.01rem black;}.glon:hover{box-shadow: 0 0 4px 2px rgba(0, 140, 186, 0.5);}.loader{background: white;}.pos_box{      border:1px solid white;    }.access_btn{  color: white!important; background: transparent;}.txt{background: black;color: white;}#navbar .link:hover, #navbar .active {  background-color: #ddd;  color: black;}.user_pro{  border:1px solid black;}.btn_ses{background: rgb(60,60,60);color: white;}.user_pro{  color: white;  border:1px solid white;}.pos_link,.pos_link:hover{      color: white;      text-decoration: none;    }  </style>  <?php}?><link rel="shortcut icon" type="image/png" href="logo/s1.png"><link rel="stylesheet" type="text/css" href="font/css/all.css"><script type="text/javascript" src="js/main.js"></script><style type="text/css"> body {margin: 0; background-color: #f1f1f1;font-family: Arial, Helvetica, sans-serif;}</style><script>var prevScrollpos = window.pageYOffset;window.onscroll = function() {var currentScrollPos = window.pageYOffset;if (prevScrollpos > currentScrollPos) {   document.getElementById("navbar").style.top = "0";} else { document.getElementById("navbar").style.top = "-50px";}prevScrollpos = currentScrollPos;}</script><style type="text/css">  .server_container{    width: 100%;    animation: 2s slideup;    background: rgb(60,60,60);    padding:10px;    position: fixed;    bottom:0;    left:0;  }    .server_container1{    width: 100%;    animation: 2s slideupp;  background: rgb(60,60,60);    padding:10px;    position: fixed;    bottom:0;    left:0;  }  @keyframes slideupp{    0%{position: fixed;bottom: 0left: 0;margin-bottom: 0;}   100%{position: fixed;bottom: 0;left: 0;margin-bottom: 400px;} }.server_err_text{  font-size: 20px;  color: white; } .point{   cursor: pointer; } .server_error_small{   color: white;   font-size: 10px; }  .server_btn{    margin-top: 5px;    margin-bottom: 5px;    background: orange;    color: black;border:0;    height: 30px;    width: 70px;}  .server_btn:hover{    color: white;}  .profile_text{ font-size: 20px;}</style><div class="push"></div><style type="text/css">  .push{    height: 10px;  }  .user_pro{width: 100%;padding-top: 10px;padding-left: 10px;padding-right: 10px;padding-bottom: -10px;height: 70px;border-radius: 5px;margin-bottom: 20px;}
.right{
  float: right;
}
.btn_ses{
padding-bottom: -3px;
border-radius: 5px;
}
.btn_ses:hover{
  color: white;
}
.p{
    padding: 20px;
    width: 100%;
}
.glon{
  border-radius: 5px;
  padding: 10px;
  margin-bottom: 20px;
  border:1px solid black;
}
.access_btn{
  border:0;
  font-size: 20px;
}
#navbar{
  position: fixed;
  top: 0;
  width: 100%;
  display: block;
  transition:0.5s;
}
#navbar .link{
   float: left;
  display: block;
  text-align: center;
  padding: 15px;
  text-decoration: none;
  font-size: 17px;
}
}
.pos{

}
.txt{
  width: 100%;
  height: 300px;
  margin-bottom: 2px;
}
.right1{
  float: right;
}
.pos_link{
  text-decoration: none;
  color: inherit;
}
.pos_box{
  margin-left: 15px;
    border-radius: 5px;
    width: 96%;
    padding: 20px;
    margin-right: 15px;
    margin-bottom: 10px;
    height: auto;
  }
  @media(max-width: 700px){
    .pos_box{
      padding: 10px;
      width: 90%;
    }
  }
  .post{
    width: 100%;
    resize: none;
    border:0;
    margin-top: 5px;
    background: transparent;
    color: inherit;
  }
  *,
*::before,
*::after {
  box-sizing: border-box;
}
html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -ms-overflow-style: scrollbar;
  -webkit-tap-highlight-color: transparent;
}

@-ms-viewport {
  width: device-width;
}

article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block;
}

body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color: #fff;
}

[tabindex="-1"]:focus {
  outline: 0 !important;
}

hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible;
}

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  -webkit-text-decoration: underline dotted;
  text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 700;
}

dd {
  margin-bottom: .5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

dfn {
  font-style: italic;
}

b,
strong {
  font-weight: bolder;
}

small {
  font-size: 80%;
}

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -.25em;
}

sup {
  top: -.5em;
}
.top,.right1,.post{
  font-size: 18px;
}
.delete{
  border-radius: 5px;
  border:1px solid red;
  color: inherit;
  background: transparent;
  height: 40px;
}
.edit{
  border-radius: 5px;
  border:1px solid green;
  color: inherit;
  background: transparent;
  height: 40px;
}




/* Set a style for all buttons */
.but {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.bu:hover {
  opacity:1;
}

/* Float cancel and delete buttons and add an equal width */
.cancelbtn, .deletebtn {
  float: left;
  width: 50%;
}

/* Add a color to the cancel button */
.cancelbtn {
  background-color: #ccc;
  color: black;
}

/* Add a color to the delete button */
.deletebtn {
  background-color: #f44336;
}

/* Add padding and center-align text to the container */
.cont {
  padding: 16px;
  text-align: center;
}

/* The Modal (background) */
.modal {  display: none; /* Hidden by default */position: fixed; /* Stay in place */z-index: 1; /* Sit on top */left: 0;top: 0;width: 100%; /* Full width */height: 100%; /* Full height */overflow: auto; /* Enable scroll if needed */background-color: #474e5d;padding-top: 50px;}/* Modal Content/Box */.modal-content {  background-color: #fefefe;margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */border: 1px solid #888;  width: 80%; /* Could be more or less, depending on screen size */}/* Style the horizontal ruler */.hr1 {  border: 1px solid #f1f1f1;margin-bottom: 25px;}/* The Modal Close Button (x) */.close {  position: absolute;right: 35px;  top: 15px;  font-size: 40px;  font-weight: bold;  color: #f1f1f1;}.close:hover,.close:focus {  color: #f44336;  cursor: pointer;}/* Clear floats */.clearfix::after {  content: ""; clear: both; display: table;}/* Change styles for cancel button and delete button on extra small screens */@media screen and (max-width: 300px) {.cancelbtn, .deletebtn { width: 100%;}}.tdn{  text-decoration: none!important!important;}.wd-100{  width: 100%;}.can{  height: 40px;  border-radius: 5px;background: transparent;}.pae{  display: none;}#filter{position: fixed;top:0;right: 0;margin-top: 8px;}@media(max-width:700px){#filter{position: fixed;top:0;right: 0;margin-top: 53px;}}.gchat_type,.gchat_send{position: fixed;bottom: 0;}.gchat_type{left: 0;height: 40px;width: 90%;}.gchat_send{right: 0;width: 10%;height: 40px;}.gchat_pe{  display: none;}.gchat_con{  width: 100%;  height: 400px;  resize: none;}.tac_item{  font-size: 18px;  margin-top: 10px;}</style><script> function index(){window.location = "index.php";}</script>