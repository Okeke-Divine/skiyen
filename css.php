<meta http-equiv='content-language' content='en-gb'>
<html lang='en-gb'>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png"> -->
<!-- <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png"> -->
<!-- <link rel="apple-touch-icon" href="/apple-touch-icon-57x57.png"> -->
<!-- <link rel="apple-touch-startup-image" href="/splash-startup.png"> -->
<?php

  include("css1.php");
  include("js.php");
  include("function.php");

?>
<script type="text/javascript" src="/js1/push.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="HandheldFriendly" content="true">
<meta name="MobileOptimized" content="width">
<script type="text/javascript">
  function _(el){
return document.getElementById(el);
}
</script>
<meta name="robots" content="index,follow">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<style type="text/css">
  .hidden_must{
    display: none!important;
  }
#navbar{
  z-index: 1;
}
@media(max-width:700px){
  .scr-null{
    display: none;
  }
  .large{
    font-size: 20px!important;
  }
}

.readmore{
  height: 20px;
}
.loader { 
  height: 5px; -webkit-animation: spin 3s linear; /* Safari */animation: spin 3s linear;}/* Safari */
@-webkit-keyframes spin {0% { width: 0;  }100% { width: 100%;}}
@keyframes spin {  0% { width: 0;  }  100% { width: 100%;}}
</style>
  
  <style type="text/css">
    ::-webkit-scrollbar {width: 7px;}/* Track */
    ::-webkit-scrollbar-track { /*border-left:1px solid #f1f1f1;*/}/* Handle */
    ::-webkit-scrollbar-thumb {
        /* Handle on hover */
        background: #888; 
      }
    ::-webkit-scrollbar-thumb:hover {background: #555; }

    #navbar {
  background-color: #333;
}

.loader{background: white;}
#navbar .link {
  color: #f2f2f2;
}
.can{
  border:1px solid white;
  color: inherit;
    }
html,body{
  color: black!important;
  /*background: white!important;*/
}

.pos_box{
      border:1px solid white;
    }

.access_btn{
  border:0;
  color: black;
  font-size: 20px;
  background: transparent;
}

.txt{
  background: white;
  color: black;
  padding: 5px;
  width: 95%;
  height: auto;
  word-wrap: break-word;
  border-radius: 10px;
  border:0;
  font-size: 25px;
  height: 300px;
}

#navbar .link:hover, #navbar .active {
  background-color: #ddd;
  color: black;
}
.user_pro{
  border:1px solid grey;
}
.opacity_som{
  opacity: 0.7;
}
.opacity_som:hover,.opacity_som1:hover{
  opacity: 1;
}
.opacity_som1{
  opacity: 0.3;
}
.btn_ses{
background: rgb(60,60,60);
color: white;
}
.pos_link,.pos_link:hover{
      color: white;
      text-decoration: none;
    }
  </style>






<style type="text/css">
  body {
  margin: 0;
  /*background-color: #f1f1f1;*/
  font-family: Arial, Helvetica, sans-serif;
}


</style>



<style type="text/css">
  .server_container{
    width: 100%;
    animation: 2s slideup;
    background: rgb(60,60,60);
    padding:10px;
    position: fixed;
    bottom:0;
    left:0;
  }
    .server_container1{
    width: 100%;
    animation: 2s slideupp;
    background: rgb(60,60,60);
    padding:10px;
    position: fixed;
    bottom:0;
    left:0;
  }
  @keyframes slideupp{
    0%{position: fixed;bottom: 0;left: 0;margin-bottom: 0;}
    100%{position: fixed;bottom: 0;left: 0;margin-bottom: 400px;}
  }
  .server_err_text{
    font-size: 20px;
    color: white;
  }
  .point{
    cursor: pointer;
  }
  .server_error_small{
    color: white;
    font-size: 10px;
  }
  .server_btn{
    margin-top: 5px;
    margin-bottom: 5px;
    background: orange;
    color: black;
    border:0;
    height: 30px;
    width: 70px;
  }
  .server_btn:hover{
    color: white;
  }
  .profile_text{
  font-size: 20px;
}

  .push{
    height: 10px;
  }
  .user_pro{
  width: 100%;
  padding-top: 10px;
  padding-left: 10px;
  padding-right: 10px;
  padding-bottom: -10px;
  height: 70px;
  border-radius: 5px;
  margin-bottom: 20px;
}
.right{
  float: right!important;
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
.glon:hover{
  /*box-shadow: 0 0 4px 2px rgba(0, 140, 186, 0.5);*/
}
.glon{
  color: black;
  padding: 10px;
  margin-bottom: 20px;
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
  /*background-color: #fff;*/
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
  width: 70px;
}

.edit{
  border-radius: 5px;
  border:1px solid green;
  color: inherit;
  background: transparent;
  height: 40px;
  width: 70px;
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
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
.hr1 {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* The Modal Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
    width: 100%;
  }
}
.tdn{
  text-decoration: none!important!important;
}
.wd-100{
  width: 100%;
}
.can{
  height: 40px;
  border-radius: 5px;
  background: transparent;
}
.pae{
  display: none;
}
#filter{position: fixed;top:0;right: 0;margin-top: 8px;}
@media(max-width:700px){#filter{position: fixed;top:0;right: 0;margin-top: 53px;}}

.gchat_type,.gchat_send{
  position: fixed;
  bottom: 0;
}
.gchat_type{
left: 0;
height: 40px;
width: 90%;
}
.gchat_send{
right: 0;
width: 10%;
height: 40px;
}
.gchat_pe{
  display: none;
}
.gchat_con{
  width: 100%;
  height: 400px;
  resize: none;
}
</style>
<script> function index(){window.location = "index.php";}</script>

<style type="text/css">
  
</style>
<style type="text/css">
    
    .whole_post{
      height: auto;
      border-radius: 0.3rem;
      width: 90%;
      padding: 10px;
      text-align: left;
      margin-bottom: 80px;
    }

    .main_post{
      height: auto;
      width: 100%;
    }

    .post_text{
      color: inherit;
      height: auto;
      background: transparent;
      resize: none;
      border:0;
      width: inherit;
    }

    .topper{
      margin: 0;
      padding: 5px;
      height: 40px;
      margin-bottom: 10px;
    }
    .name{
      float: left;
    }
    .time{
      float: right;
    }

    .post_link,.post_link:hover{
      text-decoration: none;
      color: black;
    }

  </style>

<style type="text/css">
   /* stylelint-disable selector-list-comma-newline-after */

.blog-header {
  line-height: 1;
  border-bottom: 1px solid #e5e5e5;
}

.blog-header-logo {
  font-family: "Playfair Display", Georgia, "Times New Roman", serif;
  font-size: 2.25rem;
}

.blog-header-logo:hover {
  text-decoration: none;
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display", Georgia, "Times New Roman", serif;
}

.display-4 {
  font-size: 2.5rem;
}
@media (min-width: 768px) {
  .display-4 {
    font-size: 3rem;
  }
}

.nav-scroller {
  position: relative;
  z-index: 2;
  height: 2.75rem;
  overflow-y: hidden;
}

.nav-scroller .nav {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
  padding-bottom: 1rem;
  margin-top: -1px;
  overflow-x: auto;
  text-align: center;
  white-space: nowrap;
  -webkit-overflow-scrolling: touch;
}

.nav-scroller .nav-link {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: .875rem;
}

.card-img-right {
  height: 100%;
  border-radius: 0 3px 3px 0;
}

.flex-auto {
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
}

.h-250 { height: 250px; }
@media (min-width: 768px) {
  .h-md-250 { height: 250px; }
}

/* Pagination */
.blog-pagination {
  margin-bottom: 4rem;
}
.blog-pagination > .btn {
  border-radius: 2rem;
}

/*
 * Blog posts
 */
.blog-post {
  margin-bottom: 4rem;
}
.blog-post-title {
  margin-bottom: .25rem;
  font-size: 2.5rem;
}
.blog-post-meta {
  margin-bottom: 1.25rem;
  color: #999;
}

/*
 * Footer
 */
.blog-footer {
  padding: 2.5rem 0;
  color: #999;
  text-align: center;
  background-color: #f9f9f9;
  border-top: .05rem solid #e5e5e5;
}
.blog-footer p:last-child {
  margin-bottom: 0;
}

.select_file_style{
  font-size: 25px;
}
  .emoji{
    cursor: pointer;
    font-size: 30px;
  }
  .emoji:hover{ 
   background: rgb(60,60,60);
  }
  .modall {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  -webkit-animation-name: fadeInn; /* Fade in the background */
  -webkit-animation-duration: 0.4s;
  animation-name: fadeInn;
  animation-duration: 0.4s
}

/* Modal Content */
.modal-contentt {
  position: fixed;
  bottom: 0;
  background-color: #fefefe;
  width: 100%;
  -webkit-animation-name: slideInn;
  -webkit-animation-duration: 0.4s;
  animation-name: slideInn;
  animation-duration: 0.4s
}

/* The Close Button */
.closee {
  color: black;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.closee:hover,
.closee:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}


.modal-bodyy {padding: 2px 16px;}


/* Add Animation */
@-webkit-keyframes slideInn {
  from {bottom: -300px; opacity: 0} 
  to {bottom: 0; opacity: 1}
}

@keyframes slideInn {
  from {bottom: -300px; opacity: 0}
  to {bottom: 0; opacity: 1}
}

@-webkit-keyframes fadeInn {
  from {opacity: 0} 
  to {opacity: 1}
}

@keyframes fadeInn {
  from {opacity: 0} 
  to {opacity: 1}
}

.point{
  cursor: pointer;
}

  .white{
    color: white;
  }
  .white:hover,.white:focus,.white:active{
    color: white;
    opacity: 1!important;
  }
  a{text-decoration: none;}
  @media(max-width: 700px){
    .large-scr-only{
    display: none;
  }
  .right_links{
    float: left;
    margin-left: 10px;
  }
   .left_links{
    float: left;
    margin-left: 10px;
  }


}
@media(min-width: 701px){
  .right_links{
float: right;
margin-right: 10px;
}
}

.active_link{
  opacity: 1!important;
}
.link_def_one_sk{
  color: black;
}
.link_container{
  width: 100%;
  margin-left: 10px;
  margin-right: 10px;
}
.post_actions{
  display: flex;
}
.post_num_circle{
  margin-left: 10px;
}
.comment_text{
  margin-bottom: 5px;
}
.comment_view{
  display: flex;
  color: black;
  border:1px solid grey;
  padding: 15px;
}
.post_message{
  width: 100%;
  word-wrap: break-word;
}
.post_message a,.post_message a:hover{
  color: black;
  font-size: 15px;
  color: #0d6efd;
  text-decoration: none;
}

.comment_box{
  width: 100%;
  height: auto;
  padding: 10px;
  background:transparent;
  word-wrap: break-word;
  border-top:1px solid grey;
  color: black;
}
.post_right{
  opacity: 0.8;
  float: right;
}
.post_top{
  width: 100%;
  display: flex;
}
.post_content{
  color: black;
}
</style>
<?php

date_default_timezone_set('Africa/Lagos');
date_default_timezone_get();

?>
<style type="text/css">
  .skiyen{
    margin: 0;
    font-size: 25px;
    padding: 0;
  }
  .blue{
    color: #0d6efd;
  }
  .red{
    color: red;
  }
  .yellow{
    color: #ffc107;
  }
  .orange{
    color: #fd7e14;
  }
  .green{
    color: #198754;
  }
  .cyan{
    color: #0dcaf0;
  }
</style>
<style type="text/css">
  html,body{
    word-wrap: break-word;
  }
  .circle_num{
    border-radius: 50%;
    height: auto;
    width: 25px;
    margin-right: 10px;
    text-align: center;
    color: white;
    background: black;
  }
  .dark{
    color: black;
  }
  #google_translate_element{
    position: fixed;
    bottom:0;
    left:0;
  }
  .profile_picture_edit_logo{
    position: relative;
    top:-150px;
    right: -60px;
    background: #eee;
    border-radius: 50%;
    display: block;
    vertical-align: middle;
    align-items: center;
    width: 35px;
    height: 35px;
    padding-top: 8px;
  }
  .profile_picture_edit_logo1{
    position: relative;
    right: 38px;
    background: #eee;
    padding-top:10px;
    padding-bottom:10px;
    padding-left:10px;
    padding-right:8px;
    cursor: pointer;
    border-radius: 50%;
    text-align: center;
  }

  .post_like_num{
    color: grey;
    cursor: pointer;
    margin-top: 10px;
    margin-bottom: 10px;
  }

  .chat_ifframe{
    display:none;
    width: 100%;
    position: fixed;
    height:35px;
    bottom: 0;
    left:0;
    outline: none;
    border: 0;
    background: transparent;
    z-index: 1;
  }
  .search_select_btn,.search_select_btn:active,.search_select_btn:focus{
    width: 32%;
    margin: 0;
    height: 30px;
    padding: 0;
    border-radius: 4px;
    background: transparent;
    border:none;
    }
    .search_select_btn_active,.search_select_btn:hover{
      background: grey;
      color: white;
    }
    .plus_one{
      width: 70px;
      padding-top:50px;
      padding-bottom:50px;
      border-radius: 5px;
      padding-left: 20px;
      cursor: pointer;
      padding-right: 20px;
      text-align: center;
      background: #eee;
    }
    .chat_btn{
      width: 100%;
      height: auto;
      text-align: left;
      border:0;
      margin-bottom: 5px;
      cursor: pointer;
    }
    .chat_btn:active,.chat_btn:focus{
      background: transparent;
    }
    .search_container{
      width: 97%;
      text-align: left;
      padding:10px;
      border:1px solid grey;
      border-radius: 50px;
    }
    .search_container .borderless_search{
      border:0;
      width:88%;
    }
    .search_container button{
      float: right;
      color: grey;
    }
    .search_container .line{
      float: right;
      color: grey;
    }
    .skiyen_filter{
    	width:100%;
    	margin-bottom:15px;
    	border-bottom:1px solid grey;
    }
    .skiyen_filter button{
    	width:32%;
    }
    .skiyen_filter button:hover{
    	color:#0d6efd;
    }
    .skiyen_filter .active{
    	color:#0d6efd;
    }
    .welcome_info_line_div{
    	width:80%;
    	height:1px;
    	margin:0;
    	float:right;
    	border:0.5px solid grey;
    	opacity:0.6;
    }
    .flexex{
      display: flex;
      flex-wrap: wrap;
    }
    .followers_profile{
      width: 280px;
      margin-left:5px;
      margin-bottom:5px;
      padding:10px;
      display: block!important;
      border:1px solid grey;
    }
    .hiden_ssss{
      position: fixed;
      bottom:0;
      right:0;
      opacity: 0;
    }
    .search_suggestions_div{
      width: 74%;
      text-align: left;
      max-height: 400px;
      position: absolute;
      left: 110px;
      padding: 10px;
      border-radius: 7px;
      display: none;
      margin: 0;
      overflow: auto;
      z-index:5;
      background: white;
    }
    @media(max-width: 600px){
      .search_suggestions_div{
        left: 40px;
      }
    }
    .not_found{
      width: 100%;
      cursor: pointer;
    }
    .search_result{
      cursor: pointer;
      width: 100%;
      padding:5px;
      border-radius: 5px;
      height: auto;
      margin-bottom: 10px;
    }
    .flexex{
  display: flex;
  flex-wrap: wrap;
}
.view_box{
  margin:10px;
  padding: 10px;
  width: 250px;
}
.view_box:hover{
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
.def_search{
  width: 80%!important;
  display: inline-flex!important;
}
.filter{
  margin-top: 10px;
}
.filter button{
  width: 49%;
}
.filter button:hover{
  opacity: 0.5;
}
.filter .active{
  opacity: 0.5;
}
.def_cont{
  width: auto;
  height: auto;
  margin: 10px;
}
.HHU8hns .y2{
  display: inline-flex;
  width: auto;
}
.HHU8hns .y2 i{
  margin-top: 5px;
}
.HHU8hns select{
  border:0;
  outline: 0;
  resize: none;
}
.HHU8hns .alt_text{
  font-size: 20px;
}
.fi_crl{
  position: relative;
  font-size: 40px;
}
.division{
  width: 100%;
  height: 10px;
  color: transparent;
  background: rgba(220,220,220,1.0);
  margin: 0;
  padding: 0;
}
.m0{
  margin: 0!important;
}
.tl{
  text-align: left;
}
.home_img{
  border-radius: 50%;
  border:1px solid grey;
  width: 40px;
  height: 40px;
}
.black_link,.black_link:hover{
  color: black;
  text-decoration: none;
}
.pointer{
  cursor: pointer;
}
.closure{
  padding: 10px;
  font-size: 20px;
}
.nov button{
  text-align: center;
  font-size: 18px;
}
.nov{
  position: fixed;
  top:0;
  left: 0;
  width: 100%;
  padding: 5px;
}
:root{
  --main_back_col:#0d6efd;
}
.hov_btn:hover,.act_btn{
  border-radius: 0;
  color: #0d6efd;
  border-bottom: 3px solid var(--main_back_col);
}
.bg-db{
  background: var(--main_back_col);
  color: white;
}
.active_link{
  color: var(--main_back_col);
}
.nab{
  padding-left: 5px;
  padding-right: 5px;
}
.inh{
  color: inherit;
}
.top_search_line{
  width: 60%;
  text-align: center;
  color: black;
}
    .large-scr-only{
      display: none;
  }
  .edit-point{
    cursor: text;
  }
  .noti_num{
    color:black;
    position: relative;
    z-index:1;
    margin:0;
    border-radius: 50%;

  }
</style>

<style type="text/css">
  /* The Modal (background) */
  .mo1{
    position: fixed;
  }
.mo {
  display: none;
  position: fixed; /* Stay in place */
  z-index: 4; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.mo-content {
  background-color: grey;
  opacity: 0.8;
  border-radius: 5px;
  margin: auto;
  position: fixed;
  bottom:0;
  left:0;
  padding: 20px;
  height: 200px;
  overflow: auto;
  border: 1px solid #888;
  width: 100%;
}
.mo-content:hover{
  opacity: 1;
}

.mo1 {
  display: none;
}

/* Modal Content */
.mo-content1 {
  background-color: white;
  border-radius: 5px;
  margin: auto;
  padding: 20px;
  height: 200px;
  max-height: 200px;
  overflow: auto;
}


/* The Close Button */
.cls {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.cls:hover,
.cls:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
<style type="text/css">
.post_area {
  float: right;
  width: 100%;
}
.post_area div {
  width: 500px;
  margin: 50px auto;
  background-color: #fff;
  overflow: hidden;
  padding: 20px;
  border-radius: 3px;
  box-shadow: 1px 1px 1px rgba(0,0,0,.3);
  z-index: 3;
  position: relative;
}
@media(max-width: 600px){
  .post_area div{
    width: 300px;
  }
  .post_area .post_text_area{
    width: 250px;
  }
}
.post_area div img {
  float: left;
  width: 60px;
  height: 60px;
}
.post_area div textarea {
  width: 400px;
  height: 150px;
  border: 0;
  padding: 5px 10px;
  font-family: arial;
  resize: none;
  outline: none;
  border-bottom: 2px solid #0077CC;
}
textarea::-webkit-scrollbar {
  width: 0px;
  background-color: transparent;
}
textarea::-webkit-scrollbar-thumb {
  background-color: #CCC;
  border-radius: 2px
}
.post_area div [type = submit],.post_area .emoji_cont{
  float: right;
  margin: 15px 10px auto auto;
  border: none;
  color: #fff;
  font-weight: bold;
  padding: 10px 15px;
  border-radius: 3px;
  font-size: 16px;
}
.post_area .emoji_cont{
  background: rgba(215,215,215,0.4);
}
.overlay {
  background-color: rgba(0,0,0,.5);
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  z-index: 2;
}
 .tooltip_ski{
  z-index: 5;
                position: relative;
            }
            .tooltip_ski::after{
                content: attr(data-tooltip);
                height: auto;
                word-wrap: break-word;
                background: rgba(0,0,0,0.4);
                color: #fff;
                font-size: 1rem;
                text-align: center;
                position: absolute;
                bottom: -150%;
                padding: 5px 12px;
                line-height: 30px;
                border-radius: 3px;
                opacity: 0;
                transition: .3s;
                pointer-events: none;
                user-select: none;
            }
            .tooltip_ski:hover::after{
                opacity: 1;
            }
 *{
              box-sizing: border-box;
            }
            :root{
                --btn-width-100: 100px;
            }
            nav_skiyen{
                /*background: #1e2321;*/
                margin: 0;
                padding: 0;
                z-index: 100;
            }
            nav_skiyen ul {
                margin: 0;
                padding: 8px 15px;
                list-style: none;
                display: flex;
                box-shadow: 0 1px 8px rgba(0,0,0,0.3);
            }
            nav_skiyen ul li {
                padding: 3px;
            }
            nav_skiyen ul li a{
                display: inline-block;
                text-decoration: none;
            }
            nav_skiyen ul li #sk{
                color: #fff;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 2rem;
            }
            nav_skiyen ul li #search_btn{
                border: none;
                outline: none;
                background: rgba(0, 0, 0, 0.068);
                padding: 8px;
                color: #888;
                width: 40px;
                height: 40px;
                font-size: 1rem;
                border-radius: 50%;
                cursor: pointer;
                
            }
            nav_skiyen ul li#space1{
                flex: 1;
            }
            nav_skiyen ul li#space2{
                flex: 2;
            }
            nav_skiyen ul li a{
                height: 40px;
                width: var(--btn-width-100);
                font-size: 1.5rem;
                display: flex;
                justify-content: center;
                align-items: center;
                color: rgb(158, 158, 158);
                transition: .5s;

            }
            nav_skiyen ul li #btn_plus,
            nav_skiyen ul li #btn_msg,
            nav_skiyen ul li #btn_bell,
            nav_skiyen ul li #btn_profile{
                height: 40px;
                width: 40px;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 1rem;
                color: black;
                background: rgba(0, 0, 0, 0.068);
                border: none;
                outline: none;
                border-radius: 50%;
                cursor: pointer;
            }

            
            nav_skiyen ul li:hover #home, 
            nav_skiyen ul li:hover #group, 
            nav_skiyen ul li:hover #tv, 
            nav_skiyen ul li:hover #friend{
                background: rgba(0, 0, 0, 0.138);
                color: #444;
                border-radius: 5px;
           
            } 
        

            
            .active_ski{
                color: #0B84ED!important; 
            }

            
            @media  screen and (max-width: 700px){
                nav_skiyen ul{
                    padding: 8px 12px;
                  justify-content: space-between;
                }
                :root{
                    --btn-width-100: 60px;
                }
            nav_skiyen ul li#space1{
                flex: 0;
            }
            nav_skiyen ul li#space2{
                flex: 0;
            }
            nav_skiyen ul li a{
                width: 20px;
            }
               nav_skiyen ul li:hover #home, 
            nav_skiyen ul li:hover #group, 
            nav_skiyen ul li:hover #tv, 
            nav_skiyen ul li:hover #friend{
                            background: none;
           
            }
            }


.classic_noti_num{
color: red;
}
.vp_text{
  position: relative;
  margin-left: 5px;
  top:11px;
}
.btn .btn{
  background: transparent!important;
}
.ski_game .cont{
  width: 100%;
  height: auto;
  background: inherit;
}
.u_cont:hover{
  box-shadow: none!important;
}
.u_cont button{
  width: 30%;
  text-align: center;
}
.active_bll{
  color: grey;
}
.msg_area_input{
  background-color: #fff;
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
}
@media(max-width: 600px){
  .msg_area_input .inp{
    width: 70%!important;
  }
}
.msg_area_input .inp{
  width: 88%;
  display: inline-flex!important;
}
.msg_area_input .upp{
  width: 10%!important;
  margin-bottom: 10px;
}
@media(max-width: 800px){
.msg_area_input .inp{
  width: 90%;
}  
}
@media(max-width: 500px){
.msg_area_input .inp{
  width: 87%;
}  
}
#all_msg{
  padding-left: 10px;
  width: 100%;
}
.settings_div{
  
}
.a111111111{
  position: fixed;
    top:0;
    left:0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.nav_png{
  position: absolute;
    top:0;
    left:0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.hrz{
    position: relative;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 10px;
    margin-left: 10px;
}
.chat_btn_pic{
  width: 40px;
  height: 40px;
  border-radius: 50%;
}
.chat_btn1{
  background: #eee;
}
.groups_top{
  width: 100%;
  height: auto;
  word-wrap: break-word;
  margin:0;
  padding:0;
}
.groups_top .top{
  width: 100%;
  height: 40px;
}
.groups_top .top button{
 height: 40px;
                width: 40px;
                justify-content: center;
                font-size: 1rem;
                color: black;
                background: rgba(0, 0, 0, 0.068);
                border: none;
                outline: none;
                cursor: pointer;
                width: 32%;
}
.balanced_div{
  width: 100%;
  height: auto;
  word-wrap: break-word;
}
.post_text_area{
	width:100%;
	height:auto;
	word-wrap:break-word;
}
.new_info{
  color: red;
}
.cont143{
  width: 350px;
  height: 500px;
  overflow: auto;  
}

.cont143 .topper{
  color: white;
  background: #007bff;
  width: 100%;
  padding: 15px;
  height: 50px;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  text-align: center;
  margin: 0;
}
.cont143 .input_cont{
  background: #ebebe0;
  padding: 15px;
  height: 53px; 
  border-bottom-right-radius: 5px; 
  border-bottom-left-radius: 5px;
  border-top-right-radius: 0px;
  border-top-left-radius: 0px;
}
.ino{
  margin: 0!important;
  position: relative;
  top:-10px;
  height: 42px!important;
}
.iijdjd{
  position: relative;
  top:-3px;
  border:0!important;
  width: 85%!important;
  float: left;
  height: 30px;
}
.iijdjd1{
  position: relative;
  top:-5px;
  float: right;
}
.cont143 .msg_cont{
  padding: 10px;
  margin: 0;
  height: 300px;
  max-height: 300px;
  overflow:auto;
  border-right: 2px solid #ebebe0;
  border-left: 2px solid #ebebe0;
}
.sbtn{
  width: 100%;
}
.info-input{
  display: block;
  width: 100%;
  height: calc(2.25rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.info-input:focus {
  color: #495057;
  background-color: #fff;
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.info-input::-webkit-input-placeholder {
  color: #6c757d;
  opacity: 1;
}

.info-input::-moz-placeholder {
  color: #6c757d;
  opacity: 1;
}

.info-input:-ms-input-placeholder {
  color: #6c757d;
  opacity: 1;
}

.info-input::-ms-input-placeholder {
  color: #6c757d;
  opacity: 1;
}

.info-input::placeholder {
  color: #6c757d;
  opacity: 1;
}

.info-input:disabled, .info-input[readonly] {
  background-color: #e9ecef;
  opacity: 1;
}

.nm{
  color: red;
}
.flexexx1{
  display: flex;
  flex-wrap: wrap;
}
.home_cont{
  display: all!important;
}
@media(max-width: 700px){
  .dsfgkdsa030fo{
    display: none;
  }
  .sug_menu{
    display: none;
  }
  .post_menu{
    width: 92%;
    margin-left: 10px;
    margin-right: 10px;
  }
}
@media(min-width: 800px){
    .home_cont{
      display: flex;
      width: 100%!important;
    }
    .sug_menu{
      transition: 0.5s;
      width: 200px;
    }
    .sug_menu1{
      width: 200px;
      padding-left: 10px!important;
    }
    .post_menu{
      width: 480px;
      margin-right: 15px;
    }
    .post_menu1{
      width: 300%;
    }
    .dsfgkdsa030fo{
      display: all!important;
      width: 250px;
     /* padding: 10px;
      background: white;
      position: fixed;
      top: 0;
      overflow: auto;
      right: 0;
      margin-top: 60px;
      bottom: 0;  */
    }
}
@media(min-width:610px){
	.leftter{
		/*width:280px;
		position:fixed;
		top:0;
		left:0;
		margin-top:65px;
		overflow:auto;
		height:100%;
		margin-right:20px;*/
	}
}
@media(max-width: 600px){
.sdfsdf{
  margin-right:10px;
}
.wd800sk{

}
.wd800sk1{
	display:none;
}
.leftter{
	max-height:350px;
	overflow:auto;
}
.iframer{
	width:100%!important;
}
}
.iframer{
	margin-top:10px;
	width: 270px;
	height: 250px;
}

.left{
  float: left!important;
}

.whole_chat_box{
  width: 100%;
}
@media(min-width: 800px){
  .whole_chat_box{
    width: 100%;
    display: flex;
  }
  .whole_chat_box .users{
      padding: 10px;
      width: 300px;
      overflow: auto;
  }
  .whole_chat_box .messages{
/*    width: 600px;
    margin-left: 10px;
    background: grey;
    padding: 10px;*/
  }
}
.drop_btn:hover{
  background: lightgrey;
}
.my_nav_img{
  width: 40px;
  height: 40px;
  object-fit: cover;
  border-radius: 50%;
}
.wd100{
  width: 100%;
}
.good_viewed{
  margin:0;
  padding: 0;
}
.good_viewed1{
  position: relative;
  left: 16px;
}
@media(max-width: 699px){
  #my-followers{
    display: none!important;
  }
}
@media(min-width: 700px){
  #all_msg{
    float: right;
    width: 700px;
  }
  #my-followers{
    display: all!important;
    margin-top:30px;
    width: 400px;
    max-height: 680px;
    overflow: auto;
    margin-left: 20px;
  }
  #next_box{
    display: all!important;
    padding: 50px;
    width: 300px;
    border-radius: 5px;
    height: 315px;
    position: fixed;
    z-index: 5;
    transition: 1s;
    margin-left:40px;
    margin-top: 60px;
    background: #f8f9fa;
  }
  .chat_png1{
  position: absolute;
    top:0;
    left:0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.hrz1{
    position: relative;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 10px;
    margin-left: 10px;
}

}
@media(max-width: 600px){
#next_box{
  display: none;
}
#shift_box{
  display: none;
}
}
.chat_top_nav_text{
  font-size: 25px;
  font-weight: bold;
}
.nav_btn_one:hover{
  background: rgba(0, 0, 0, 0.138);
}
.sending_button{

}
.next_btn_on_line{
  position: relative;
  top:7px;
  left: 50px;
}
.upper_noti{
  position: relative;
  top: -20px;
}
.game_btn:hover{
  background: rgba(0, 140, 186, 0.2);
  transition:1s;
}
.game_btn{
  transition: 1s;
}
.upper_btn,.upper_btn1{
  position: fixed;
  bottom: 20px;
  right: 20px;
  background: grey;
  cursor: pointer;
  opacity: 0;
  transition: 1s;
  height:40px;
  width: 40px;
  color: black;
  border-radius: 50%;
}
.upper_btn i,.upper_btn1 i{
  position: relative;
  left: 15px;
  color: white!important;
  bottom:-5px;
}

.chat_png{
  position: absolute;
    top:0;
    left:0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.prz{
    position: relative;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    overflow: hidden;
}
.prz:hover{
  opacity: 0.8;
}
.vone{
  cursor: pointer;
}
.mainner_search{
  position: absolute;
  top:0;
  display: none;
  left: 0;
  z-index: 40;
  background: white;
  padding: 20px;
  border-bottom-right-radius: 15px; 
  border-bottom-left-radius: 15px; 
  width: 300px;
  box-shadow: 0 1px 8px rgba(0,0,0,0.3);
  margin-left: 10px;
}
.mainner_search .texter,.mainner_search .texter:hover,.mainner_search .texter{
  width: 250px;
  background: rgba(0, 0, 0, 0.068);
  border:0;
  padding: 5px;
  outline: none;
  border-top-right-radius: 15px; 
  border-bottom-right-radius: 15px; 
}
.mainner_search .lefter{
  margin-right: 30px;
  margin-top: 10px;
}
.mainner_search .lefter{
  margin-right: 20px;
}
.mainner_search .searcher{
background: rgba(0, 0, 0, 0.068);
padding-top:10px;
padding-left: 10px;
border-top-left-radius: 15px; 
  border-bottom-left-radius: 15px;  
}
.cs1{
  font-size: 15px;
  position: relative;
  left: -5px;
  z-index: 10;
}
.vidin{
  display: none!important;
}
@media(max-width: 600px){
  .vidin{
    display: block!important;
  }.vidddd{
    display: none;
    padding: 0;
    margin: 0;
    float: none;
    opacity: 0;
    z-index: -1000;
  }
}
.inform{
  color: red;
  position: absolute;
  right: 9px;
  font-size: 8px;
  top:6px;
}
.siddsoj{
	height:200px;
	width:200px;
  border-radius: 50%;
  border:5px solid white;
	position:relative;
  top:-100px;
}

 .msmsomso{
  position: absolute;
    top:0;
    left:0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/*on devices for .cpc with smaller screen*/
@media(max-width: 400px){
  .cpc{
    width: 92%!important;
    height: 200px!important;
  }
}
.cpc{
    position: relative;
    width: 95%;
    height: 350px;
    border-radius: 10px;
    overflow: hidden;
}
.ncpc{
 position: relative;
    width: 80%;
    background:grey;
    height: 300px;
    overflow: hidden;
    margin-right: 10px;
    margin-left: 10px;	
}

  .ofdokfodf{
    width: 100%;
    display: flex;
    margin-top:10px;
    overflow:hidden;
    justify-content: center;
    position:relative;
    background:black;
    margin: 0;
    justify-content: center;
    align-items: center;
  	padding: 0;
  	text-align:center;
    vertical-align: middle;
  }
  @media(max-width: 600px){
    .impo_img{
    position: absolute;
    top:0;
    left:0;
    width: 100%;
    height: 100%;
    object-fit: contain;
    }
  }
  .impo_img{
    object-fit: contain;
  }
  .glenei{
    position:relative;
  top:-220px;
  font-size: 150px!important;
  right:-20px; 
  }
  .fodsjs:hover{
    background: lightgrey!important;
  }
  .do:hover{
  color: red;
  }
    .m9i90{
      width: 80%!important;
      display: inline-flex!important;
    }
    .oj{
      width: 18%;
      position: relative;
      top:-2px;
    }
    .bosoks1{
      border-radius: 5px;
      padding: 20px;
      color: grey;
    }
    .bosoks{
      border-radius: 5px;
    }
    .sk-grey{
      color: grey;
    }   
    .hsearch{
      font-size: 20px;
    } 
    .tooltip_ski_left{
    z-index: 3;
    position: relative;
            }
            .tooltip_ski_left::after{
                content: attr(data-tooltip);
                height: auto;
                word-wrap: break-word;
                background: rgba(0,0,0,0.4);
                color: #fff;
                font-size: 1rem;
                text-align: center;
                position: absolute;
                left: -160px;
                top: -20px;
                padding: 5px 12px;
                line-height: 30px;
                border-radius: 3px;
                opacity: 0;
                transition: .3s;
                pointer-events: none;
                user-select: none;
            }
            .tooltip_ski_left:hover::after{
                opacity: 1;
            }
            .bosoks .top{
              display: flex;
              color: grey;
            }
  .onne img{
  position: absolute;
    top:0;
    left:0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.onne{
    position: relative;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 10px;
    margin-left: 10px;
    display: inline-flex!important;
}
.bosoks .bod{
  color: grey;
  margin-top: -10px;
  padding-left: 60px;
}
.bosoks .rec{
  margin-top: 10px;
}
.bosoks .rec .in{

}
.bosoks .rec .all{
  color: grey;
}
.ossok{
  padding:6px;
}
.ft{
  font-weight: bolder;
}
.onneq img{
  position: absolute;
    top:0;
    left:0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.onneq{
    position: relative;
    width: 40px;
    height: 40px;
    display: inline-flex;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 10px;
    margin-left: 10px;
}
.sdokdo{
  position: relative;
  top:-13px;
}
.hacon{
  padding-left: 65px;
}
@media(max-width: 600px){
.chat_top_nav_text{
  font-size: 20px!important;
}
}
</style>