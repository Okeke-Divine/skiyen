<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>Textarea Tricks</title>
<link rel="stylesheet" href="js/style.css">
<link rel="stylesheet" href="js/jquery-ui.css">
<script src="js/jquery.txt"></script>
<script src="js/jquery-ui.txt"></script>
<script src="js/autoresize.js"></script>
<script>
    $(function() {

    $('#example-one')
      .focus(function() { $(this).css("background", "none") })
      .blur(function() { if (this.value == '') { $(this).css("background", "url(images/benice.png) center center no-repeat") } });

      function elementSupportsAttribute(element, attribute) {
        var test = document.createElement(element);
        if (attribute in test) {
          return true;
        } else {
          return false;
        }
      };

      if (!elementSupportsAttribute('textarea', 'placeholder')) {
        // Fallback for browsers that don't support HTML5 placeholder attribute
        $("#example-three")
          .data("originalText", $("#example-three").text())
          .css("color", "#999")
          .focus(function() {
              var $el = $(this);
              if (this.value == $el.data("originalText")) {
                this.value = "";
              }
          })
          .blur(function() {
            if (this.value == "") {
                this.value = $(this).data("originalText");
            }
          });
      } else {
        // Browser does support HTML5 placeholder attribute, so use it.
        $("#example-three")
          .attr("placeholder", $("#example-three").text())
          .text("");
      }

      $("#example-six").resizable();

      $('#example-seven').autoResize();

    });
  </script>
<style>
    textarea { width: 400px; padding: 10px; }

    #example-one {
      background: url(images/benice.png) center center no-repeat; /* This ruins default border */
      border: 1px solid #888;
    }

    #example-four {
      outline: none;     /* Removes glow in Chrome & Safari when active, works on :focus or not */
      -webkit-appearance: none; /* Makes border black instead of gray */
      -moz-outline-style: none; /* Doesn't work */
    }

    #example-five {
      resize: none;
    }

    #example-eight {
      white-space: nowrap; /* Doesn't work */
    }

    #example-nine {
      overflow: auto;
    }
  </style>
</head>
<body style="cursor: auto;">
<div id="demo-top-bar">
<div id="demo-bar-inside">
<h2 id="demo-bar-badge">
<a href="https://css-tricks.com/">CSS-Tricks Example</a>
</h2>
<div id="demo-bar-buttons">
</div>
</div>
</div>
<div id="page-wrap">
<h2>Image behind</h2>
<textarea id="example-one" cols="30" rows="5" style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;">nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn&lt;meta
 name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;</textarea>
<h2>Placeholder text (HTML5)</h2>
<textarea placeholder="Remember, be nice!" id="example-two" cols="30" rows="5">&lt;meta
 name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;v</textarea>
<h2>Placeholder text (jQuery + HTML5)</h2>
<textarea id="example-three" cols="30" rows="5" placeholder="Remember, be nice!">&lt;meta
 name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;v</textarea>
<h2>Remove Glow (from WebKit)</h2>
<textarea id="example-four" cols="30" rows="5">&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;</textarea>
<h2>Remove Resize Handle (from WebKit)</h2>
<textarea id="example-five" cols="30" rows="5"></textarea>
<h2>Add Resize Handle (jQuery UI)</h2>
<div class="ui-wrapper" style="overflow: hidden; position: relative; width: 425px; height: 115px; top: 0px; left: 0px; margin: 0px; padding-right: 7px; padding-bottom: 16px;"><textarea id="example-six" cols="30" rows="5" class="ui-resizable" style="resize: none; position: static; display: block; height: 93px; width: 403px;"></textarea><div class="ui-resizable-handle ui-resizable-e" unselectable="on" style="user-select: none;"></div><div class="ui-resizable-handle ui-resizable-s" unselectable="on" style="user-select: none;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 1001; user-select: none;" unselectable="on"></div></div>
<h2>Auto Resize</h2>
<textarea cols="30" rows="5" style="resize: none; overflow-y: hidden; position: absolute; top: 0px; left: -9999px; height: 0px; width: 400px; line-height: normal; text-decoration: rgb(0, 0, 0); letter-spacing: normal;" tabindex="-1">&lt;meta
 name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;</textarea><textarea id="example-seven" cols="30" rows="5" style="resize: none; overflow-y: hidden; height: 215px;">&lt;meta
 name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;</textarea>
<h2>Nowrap</h2>
<textarea id="example-eight" cols="30" rows="5" wrap="off">&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;</textarea>
<h2>Remove Scrollbars (from IE)</h2>
<textarea id="example-nine" cols="30" rows="5">&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;&lt;meta 
name="google-site-verification" 
content="aFJkkTpAdkIkIOi7-q7inBHKMayiQjFfoo7GQgaNZrU" /&gt;</textarea>
</div>
<style type="text/css" style="display: none !important;">
	* {
		margin: 0;
		padding: 0;
	}
	body {
		overflow-x: hidden;
	}
	#demo-top-bar {
		text-align: left;
		background: #222;
		position: relative;
		zoom: 1;
		width: 100% !important;
		z-index: 6000;
		padding: 20px 0 20px;
	}
	#demo-bar-inside {
		width: 960px;
		margin: 0 auto;
		position: relative;
		overflow: hidden;
	}
	#demo-bar-buttons {
		padding-top: 10px;
		float: right;
	}
	#demo-bar-buttons a {
		font-size: 12px;
		margin-left: 20px;
		color: white;
		margin: 2px 0;
		text-decoration: none;
		font: 14px "Lucida Grande", Sans-Serif !important;
	}
	#demo-bar-buttons a:hover,
	#demo-bar-buttons a:focus {
		text-decoration: underline;
	}
	#demo-bar-badge {
		display: inline-block;
		width: 302px;
		padding: 0 !important;
		margin: 0 !important;
		background-color: transparent !important;
	}
	#demo-bar-badge a {
		display: block;
		width: 100%;
		height: 38px;
		border-radius: 0;
		bottom: auto;
		margin: 0;
		background: url(/images/examples-logo.png) no-repeat;
		background-size: 100%;
		overflow: hidden;
		text-indent: -9999px;
	}
	#demo-bar-badge:before, #demo-bar-badge:after {
		display: none !important;
	}
</style>

</body></html>