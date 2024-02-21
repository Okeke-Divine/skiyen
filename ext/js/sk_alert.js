	function skiyen_alert(cont){
		var alert_container = document.getElementById("skiyen_alerts");
		var alert_item = '<div id="myModal" class="modalq"><div class="modal-contentq"><p>'+cont+'</p><button class="sk_btn sk_btn-primary" id="close_alert_skiyen">Ok</button></div>';
		document.getElementById("skiyen_alert_container").innerHTML = alert_item;
		var modal = document.getElementById("myModal");
		var close = document.getElementById("close_alert_skiyen");
		close.onclick = function() {
  			modal.style.display = "none";
		}
	}