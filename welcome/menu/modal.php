<div id="myModal" class="modalq">

  <!-- Modal content -->
  <div class="modal-contentq">
    <p>You are about to be logged out from your account...</p>
    <button class="btn btn-primary" onclick="logout()">Confirm</button>
    <button class="btn btn" id="cancel">Cancel</button>
  </div>

</div>
<style type="text/css">
	.modalq {
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
}

/* Modal Content/Box */
.modal-contentq {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.closeq {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.closeq:hover,
.closeq:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>