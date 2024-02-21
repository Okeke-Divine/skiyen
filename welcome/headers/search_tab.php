<li> <button onclick="window.location = '<?php echo $search; ?>.php';" id="search_btn" class="tooltip_ski" data-tooltip="Search"> <i class="fas fa-search "></i> </button> </li>



<!-- <div class="mainner_search" id="mainner_search">
		<i onclick="hide_searchssis()" class="pointer fa fa-arrow-left lefter"></i>

		<i class="fa fa-search searcher" onclick="done()"></i>
		<input id="ss" type="text" onkeypress="sendb(event)" placeholder="Search" class="texter" name="">

</div> -->

<script type="text/javascript">
	var sss = document.getElementById("mainner_search");
	function show_searchssis(){
		sss.style.opacity = "1";
		sss.style.display = "flex";
	}function hide_searchssis(){
		sss.style.opacity = "o";
		sss.style.display = "none";
	}
	function sendb(event){
	  var kc = event.code;
	  if(kc == "Enter"){
	  	done();
	  }
	}
	function done(){
		var text = document.getElementById("ss").value;
		if(text == ""){

		}else{
		window.location = '<?php echo $search; ?>.php?to='+text;
		}
	}

</script>
<script type="text/javascript">
	window.onclick = function(event) {
  		if (event.target == sss) {
   			 sss.style.display = "none";
  		}
	} 
</script>
