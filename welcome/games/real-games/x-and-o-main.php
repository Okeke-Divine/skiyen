
<div class="container text-center">
  <h1 class="title">Tic-Tac-Toe - (X and O)</h1>
  <button id="start-game" onclick = "" class="btn-success btn btn-lg">Play</button>
  <button id="leave-game" onclick = "window.location = '../games';" class="btn-danger btn btn-lg">Exit</button>
  <div style="display: flex;word-wrap: break-word;">
    <button id="reset" style="display: none;" class="btn btn-success" >Reset</button>
  <button id="leave_game_one" style="display: none;" onclick="window.location = '../games';" class="btn btn-danger" >Leave Game</button>
</div>

<div id="game_started" class="m0" style="display:none; ;">
  <div class="alert alert-danger m0" style="text-align: left;display: none;margin:0;padding: 2px;transition: .5s;" id="game_info">s</div>
  <table class="text-center m0" id="tb">
    <tr class="box">
      <td id="1" class="square"></td>
      <td id="2" class="square"></td>
      <td id="3" class="square"></td>
    </tr>
    <tr class="box">
      <td id="4" class="square"></td>
      <td id="5" class="square"></td>
      <td id="6" class="square"></td>
    </tr>
    <tr class="box">
      <td id="7" class="square"></td>
      <td id="8" class="square"></td>
      <td id="9" class="square"></td>
    </tr>
  </table>
  </div>
  
  


</div>
<style type="text/css">
  html {
  margin: 0;
  padding: 0;
}

.square {
  background-color: red;
  width: 100px;
  height: 100px;
  border: 2px solid white;
  font-size: 4em;
  text-align: center;
  cursor: pointer;
  color: white;
}

table {
  margin: 50px auto;
  border: 10px solid white;
  box-shadow: 10px 10px 30px #333;
  font-family: "Satisfy", sans-serif;
}

.btn {
  margin: 10px auto;
}

#user {
  background-color: rgba(0, 0, 0, .5);
  width: 500px;
  height: 200px;
  margin: 50px auto;
  border-radius: 10px;
}

#x,
#o {
  font-size: 3em;
  padding: 20px;
  width: 100px;
  margin-top: 50px;
  margin-left: 50px;
  margin-right: 50px;
}

footer {
  font-size: 1.1em;
}

@media only screen and (max-width: 500px) {
  #user {
    width: 80%;
  }
  #x,
  #o {
    margin-left: 30px;
    margin-right: 30px;
  }
}


</style>
<script type="text/javascript">
  $("#start-game").click(function(){
    startGame();
})

function game_info_send(info){
  _('game_info').style.display = "block";
  _('game_info').innerHTML = info;
}
function game_info_clear(){
  setTimeout(clear_main,2000);
}
function clear_main(){
  _('game_info').innerHTML = "";
  _('game_info').style.display = "none";
}

function game_started_ski(){
  _('game_started').style.display = "block";
    _('start-game').style.display = "none";
    _('reset').style.display = "block";
    _('leave-game').style.display = "none";
        _('leave_game_one').style.display = "block";
}

function startGame(){
  // Check fo user Input
  var choice = prompt("enter x or o")
  var comp = ""
  var user = ""
  var chx = "X"
  var cho = "O"
  
  if(choice === "x" || choice === "X"){
    user = chx
    comp = cho
    game_started_ski();
  }
  else if(choice === "o" || choice === "O"){
    user = cho
    comp = chx
    game_started_ski();
  }
  else {
    alert("Invalide Choice");
  }
  //console.log(user) console.log(comp)
  
  
  //watch out for click event of the cells
  $(".square").click(function(){
    if(this.id == 1){
      if($("#1").text() == ""){
        $("#1").text(user);
        computer();
      }
      else{
        game_info_send("Has value")
        game_info_clear()
      }
      
    }
    else if(this.id == 2){
      if($("#2").text() == ""){
        $("#2").text(user);
        computer();
      }
      else{
        game_info_send("Has value")
        game_info_clear()
      }
    }
    else if(this.id == 3){
      if($("#3").text() == ""){
        $("#3").text(user);
        computer();
      }
      else{
        game_info_send("Has value")
        game_info_clear()
      }
    }
    else if(this.id == 4){
      if($("#4").text() == ""){
        $("#4").text(user);
        computer();
      }
      else{
        game_info_send("Has value")
        game_info_clear()
      }
    }
    else if(this.id == 5){
      if($("#5").text() == ""){
        $("#5").text(user);
        computer();
      }
      else{
        game_info_send("Has value")
        game_info_clear()
      }
    }
    else if(this.id == 6){
      if($("#6").text() == ""){
        $("#6").text(user);
        computer();
      }
      else{
        game_info_send("Has value")
        game_info_clear()
      }
    }
    else if(this.id == 7){
      if($("#7").text() == ""){
        $("#7").text(user);
        computer();
      }
      else{
        game_info_send("Has value")
        game_info_clear()
      }
    }
    else if(this.id == 8){
      if($("#8").text() == ""){
        $("#8").text(user);
        computer();
      }
      else{
        game_info_send("Has value")
        game_info_clear()
      }
    }
    else if(this.id == 9){
      if($("#9").text() == ""){
        $("#9").text(user);
        computer();
      }
      else{
        game_info_send("Has value")
        game_info_clear()
      }
    }
    
  });
  
 // COmputer checks for available spaces
  function computer(){
    
    // Moves if user make 5 comp
    if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == "" && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#5").text(comp);
    }
    
   // 1 and 5 click 2 
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#3").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#7").text(comp);
      alert("computer wins")
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#4").text(comp);
    }
  
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#8").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == user && $("#9").text() == ""){
      $("#6").text(comp);
      alert("computer wins!!!!")
      reset();
    }
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == user){
      $("#6").text(comp);
      alert("computer wins!!!")
      reset();
    }
    
   
    // 1 and 5 click 3
     else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#2").text(comp);
    }
    // here
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#8").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#8").text(comp);
      alert("Computer Wins!");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#8").text(comp);
      alert("Computer Wins!!!");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#8").text(comp);
      alert("Computer Wins!");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
      alert("Computer Wins!");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#4").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#6").text(comp);
      alert("Computer Wins!!!");
      reset();
    }
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == user){
      $("#6").text(comp);
      alert("Computer Wins!!!");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#9").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      reset();
    }
    
    
    
    // 1 and 5 click 4
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#7").text(comp);
    }
    
    //here
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == ""){
      $("#3").text(comp);
      alert("Computer Wins!");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == ""){
      $("#3").text(comp);
      alert("Computer Wins!");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == ""){
      $("#3").text(comp);
      alert("Computer Wins!");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == user){
      $("#3").text(comp);
      alert("Computer Wins!!!");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == ""){
      $("#2").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == ""){
      $("#8").text(comp);
      alert("Computer Wins!");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
      alert("Computer Wins!");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == ""){
      $("#9").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == comp){
      reset();
    }
    
    
    
    // 1 and 5 click 6
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#2").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#8").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#8").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#8").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#7").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == ""){
      $("#3").text(comp);
      alert("Computer Winssssss")
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      $("#3").text(comp);
      alert("Computer Winssssss")
      reset();
    }
    
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == ""){
      $("#9").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == comp){
      reset();
    }
    
    
    
   // 1 and 5 click 7 
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#4").text(comp)
    } 
    
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#6").text(comp);
      alert("Computer Wins");
      reset();
    } 
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#6").text(comp);
      alert("Computer Wins");
      reset();
    } 
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == user && $("#9").text() == ""){
      $("#6").text(comp);
      alert("Computer Wins");
      reset();
    } 
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == user){
      $("#6").text(comp);
      alert("Computer Wins!!");
      reset();
    } 
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#2").text(comp);
    } 
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#8").text(comp);
      alert("Computer Wins");
      reset();
    } 
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == ""){
      $("#3").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == comp && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == user){
      reset();
    }
    
    
    
    
    
    // 1 and 5 click 8 
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#4").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#6").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#6").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == user && $("#9").text() == ""){
      $("#6").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == user){
      $("#6").text(comp);
      alert("Computer Wins!!")
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#9").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == comp){
      $("#").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == comp){
      $("#3").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      reset();
    }
    
    
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == comp){
      $("#2").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      reset();
    }
    
    
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      $("#3").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      reset();
    }
    
    
    
    
    
    
    
    // 1 and 5 click 9
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#2").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == user){
      $("#7").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      $("#3").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      $("#3").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      $("#6").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#7").text(comp);
      alert("computer wins")
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#7").text(comp);
      alert("computer wins!!")
      reset();
    }
    
    
    
    // Moves if 2 is user 5 make comp
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == "" && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#5").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#3").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#7").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#7").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#7").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#7").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#4").text(comp);
      alert("Computer Wins!!!");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == user && $("#9").text() == ""){
      $("#6").text(comp);
      alert("Computer Wins!!!");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == user){
      $("#6").text(comp);
      alert("Computer Wins!!!");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#8").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      reset();
    }
    
    
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#1").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#9").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#9").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#9").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#9").text(comp);
      alert("Computer Wins!!!");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#6").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == user){
      $("#4").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == user){
      $("#4").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#7").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      reset();
    }
    
    // 2 nd 4
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#1").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#9").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#9").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#9").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#9").text(comp);
      alert("Computer Wins!!");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#3").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#7").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == user){
      $("#7").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      reset();
    }
    
    
    // 2 nd 6
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#3").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#7").text(comp);
      alert("Computer Wins");
      reset();
    }
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#7").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#7").text(comp);
      alert("Computer Wins");
      reset();
    }
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#7").text(comp);
      alert("Computer Wins!!");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#9").text(comp);
    }
    
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == comp){
      $("#1").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      $("#1").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == comp){
      $("#4").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      reset();
    }
    
    // 2 nd 7
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#1").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#9").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#9").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#9").text(comp);
      alert("Computer Wins");
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == user && $("#9").text() == ""){
      $("#9").text(comp);
      alert("Computer Wins!");
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
      reset();
    }
    
    
    //here
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      $("#6").text(comp);
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      reset();
    }
    
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      $("#6").text(comp);
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      reset();
    }
    
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      $("#3").text(comp);
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      reset();
    }
    
    
    
    // 2 nd 8
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#1").text(comp);
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#1").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#1").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#1").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == user && $("#9").text() == ""){
      $("#1").text(comp);
      alert("Computer Wins!!");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == user){
      $("#7").text(comp);
    }
    
     else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      $("#3").text(comp);
       alert("Computer Wins");
       reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      $("#3").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      $("#6").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      reset();
    }
    
    
    // 2 nd 8
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#3").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#7").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#7").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#7").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == user){
      $("#7").text(comp);
      alert("Computer Wins!!!");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
    }
    // here
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      $("#4").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      reset();
    }
    
    
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      $("#1").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
     
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      $("#1").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
     
      reset();
    }

    // Moves if 3 is user make 5 comp
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == "" && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#5").text(comp);
    }
    
   // 3 and 4
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#1").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() ==""  && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#9").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user  && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#9").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() ==""  && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#9").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() ==""  && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#9").text(comp);
      alert("Computer Wins!");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() ==""  && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#6").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == comp  && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#7").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == comp  && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() ==comp  && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() ==""  && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      reset();
    }
    
    
    ///here
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == comp  && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == comp  && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == comp  && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == user){
      $("#7").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == comp  && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      reset();
    }
    
    
    // 3 and 6
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#9").text(comp);
    }
    
   else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == comp){
      $("#1").text(comp);
      alert("Computer Wins");
     reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == comp){
      $("#1").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == comp){
      $("#1").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == comp){
      $("#1").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == comp){
      $("#2").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == comp){
      $("#8").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == comp){
      $("#8").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == comp){
      $("#7").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      reset();
    }
    

    
    
    
    // 3 and 7
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#4").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#6").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#6").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == user && $("#9").text() == ""){
      $("#6").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == user){
      $("#6").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#9").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == comp){
      $("#2").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == comp){
      $("#8").text(comp);
      reset();
    }
    
    //continue!!
    
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == comp){
      $("#1").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      $("#1").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    
     // 3 and 8
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#4").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#6").text(comp);
      alert("Computer Wins!!");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#6").text(comp);
      alert("Computer Wins!!");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == user && $("#9").text() == ""){
      $("#6").text(comp);
      alert("Computer Wins!!");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == user){
      $("#6").text(comp);
      alert("Computer Wins!!");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#9").text(comp);
    }
    
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == comp){
      $("#1").text(comp);
      alert("Computer Wins!!");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      $("#1").text(comp);
      alert("Computer Wins!!");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == comp){
      $("#2").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      
      reset();
    }
    
    
    
    
    
    
    
    // 3 and 8
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#6").text(comp);
    }
    
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#4").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#4").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == user){
      $("#4").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == user){
      $("#4").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#2").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == user){
      $("#7").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      reset();
    }
  
    // Moves if 4 is user make 5 comp
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == "" && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#5").text(comp);
    }
    
    // 4 aand 1
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#7").text(comp);
    }
    
     else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == ""){
      $("#3").text(comp);
       alert("Computer Wins");
       reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == ""){
      $("#3").text(comp);
       alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == ""){
      $("#3").text(comp);
       alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == user){
      $("#3").text(comp);
       alert("Computer Wins")
      reset();
    }
    
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == ""){
      $("#2").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == ""){
      $("#8").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == ""){
      $("#9").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == comp){
      alert("Computer Wins!!!")
      reset();
    }
    
    
    // 4 aand 6
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#2").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#8").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#8").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#8").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
      alert("Computer Wins!!!")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#3").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#7").text(comp);
      alert("Computer Wins")
      reset();
      
    }
    
    else if($("#1").text() == "" && $("#2").text() == comp && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == ""){
      $("#1").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == comp && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == user){
      $("#7").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    
    
    
    ///4 and 7
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#1").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#9").text(comp);
      alert("COmputer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#9").text(comp);
      alert("COmputer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#9").text(comp);
      alert("COmputer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == user && $("#9").text() == ""){
      $("#9").text(comp);
      alert("COmputer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      $("#2").text(comp);
      alert("Computer Wins!!!")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      $("#2").text(comp);
      alert("Computer Wins!!!")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      $("#3").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      reset();
    }
    
    
    
     ///4 and 8
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#1").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#9").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#9").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#9").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == user && $("#9").text() == ""){
      $("#9").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == user){
      $("#7").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      $("#3").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      $("#3").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      $("#6").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      reset();
    }
    
    
    ///4 and 8
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#2").text(comp);
    }
    
    else if($("#1").text() == "" && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#2").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
      alert("Computer Wins!");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
      alert("Computer Wins!");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
      alert("Computer Wins!");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
      alert("Computer Wins!!!");
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == user){
      $("#7").text(comp);
    }
    
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == user){
      $("#3").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      $("#3").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      $("#6").text(comp);
    }

    
    // Moves if 5 is user make 1 comp
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#1").text(comp);
    }
    
    // 5 and 2
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#8").text(comp);
    }
    
    
    // begin here
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == comp && $("#9").text() == ""){
      $("#7").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == comp && $("#9").text() == ""){
      $("#9").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == comp && $("#9").text() == user){
      $("#4").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == comp && $("#9").text() == ""){
      $("#6").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == "" && $("#8").text() == comp && $("#9").text() == ""){
      $("#7").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == comp && $("#9").text() == user){

      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == ""){
      $("#3").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == "" && $("#8").text() == comp && $("#9").text() == user){
      $("#3").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){

      reset();
    }
    
    //continue
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == comp && $("#9").text() == ""){
      $("#4").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == user && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == comp && $("#9").text() == ""){
      $("#7").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == comp && $("#5").text() == user && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == comp && $("#9").text() == user){
      $("#7").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == comp && $("#5").text() == user && $("#6").text() == user && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == ""){
      $("#3").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == comp && $("#5").text() == user && $("#6").text() == user && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      reset();
    }
    
    
    //continue
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == ""){
      $("#3").text(comp);
    }
    
    // 5 1 7 4
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == ""){
      $("#6").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      reset();
    }
    
    
    // 5 1 7 6
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == user && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == ""){
      $("#4").text(comp);
    }
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == comp && $("#5").text() == user && $("#6").text() == user && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      
      reset();
    }
    
    
    // 5 1 7 9
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      $("#4").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == comp && $("#5").text() == user && $("#6").text() == user && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      
      reset();
    }
    
    
    
    
    
    
    
    //continue 5 1 9
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == comp && $("#9").text() == user){
      $("#7").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == comp && $("#9").text() == user){
      $("#4").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == user && $("#7").text() == comp && $("#8").text() == comp && $("#9").text() == user){
      $("#4").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == comp && $("#9").text() == user){
      $("#6").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == comp && $("#9").text() == user){
      reset();
    }
    
    
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#7").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == ""){
      $("#4").text(comp);
      alert("Computer Wins")
      reset();
    }
   
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == user && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == ""){
      $("#4").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == ""){
      $("#4").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == user){
      $("#4").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == user && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == ""){
      $("#6").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == ""){
      $("#8").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == user){
      
      reset();
    }
    
    
    //continue
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == ""){
      $("#2").text(comp);
    }
    else if($("#1").text() == comp && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      
      reset();
    }
    
    
    //continue
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
    }
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == comp && $("#9").text() == user){
      
      reset();
    }
    
    
    
    
    
    // 5 and 4
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#6").text(comp);
    }
    
    //5 4 6 1
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#8").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == "" && $("#8").text() == comp && $("#9").text() == ""){
      $("#7").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == ""){
      $("#3").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == comp && $("#9").text() == user){
      
      reset();
    }
    
    
    
    
    //5 4 3
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#7").text(comp);
    }
    
    //here again
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == ""){
      $("#2").text(comp);
    }
    else if($("#1").text() == comp && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == ""){
      $("#8").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == comp && $("#9").text() == ""){
      reset();
    }
    
    // 5 4 
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#3").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#9").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == user && $("#8").text() == user && $("#9").text() == ""){
      $("#9").text(comp);
      alert("Computer Wins!!!")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      $("#2").text(comp);
      alert("Computer Wins")
      reset();
    }
    
  
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#2").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == user && $("#8").text() == user && $("#9").text() == ""){
      $("#3").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == user){
      $("#3").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#7").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
    }
    
    // 5 4 6
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#3").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == user){
      $("#2").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == user){
      $("#2").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == "" && $("#8").text() == comp && $("#9").text() == user){
      $("#8").text(comp);
    }
    
    //continue 5 4 6 1
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#4").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == comp && $("#5").text() == user && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#7").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == user && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#7").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == comp && $("#5").text() == user && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#7").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == comp && $("#5").text() == user && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#7").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == comp && $("#5").text() == user && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#3").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == comp && $("#4").text() == comp && $("#5").text() == user && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == ""){
      $("#2").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == comp && $("#4").text() == comp && $("#5").text() == user && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == user){
      $("#2").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == comp && $("#5").text() == user && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#8").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == comp && $("#5").text() == user && $("#6").text() == user && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      reset();
    }
    
    
    // 5 and 7
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#3").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#2").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#2").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == user && $("#9").text() == ""){
      $("#2").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == user){
      $("#2").text(comp);
      alert("Computer Wins");
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#8").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == ""){
      $("#6").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == user && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == ""){
      $("#4").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == comp && $("#5").text() == user && $("#6").text() == user && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      reset();
    }
    
    
    /// 5 8
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#2").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#3").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#3").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == user && $("#9").text() == ""){
      $("#3").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == user){
      $("#3").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#7").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == user && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == ""){
      $("#4").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == user && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == ""){
      $("#4").text(comp);
      alert("Computer Wins")
      reset();
    }
    else if($("#1").text() == comp && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      $("#4").text(comp);
      alert("Computer Wins")
      reset();
    }
    else if($("#1").text() == comp && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == ""){
      $("#6").text(comp);
    }
    else if($("#1").text() == comp && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      reset();
    }
    
    
    
    
    // 5 and 9
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#7").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == user){
      $("#4").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == user){
      $("#4").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == user && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == user){
      $("#4").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      $("#4").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == user && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == user){
      $("#6").text(comp);
    }
    
    
   // 5 9 1
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == comp && $("#9").text() == user){
      reset();
    }
    
    
    
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      $("#2").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      reset();
    }
    
    else if($("#1").text() == comp && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == user && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == "" && $("#9").text() == user){
      $("#").text(comp);
    }
    
    
    
    
    
    // Moves if 6 is user make  5 comp
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == "" && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == ""){
      $("#5").text(comp);
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#2").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#8").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#8").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#8").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
      alert("Computer Wins!")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == ""){
      $("#9").text(comp);
    }
    
    else if($("#1").text() == "" && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == ""){
      $("#9").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      $("#4").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      reset();
    }
    
    // continue
    else if($("#1").text() == "" && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      $("#1").text(comp);
    }
    else if($("#1").text() == comp && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      reset();
    }
    
    
    else if($("#1").text() == "" && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      $("#1").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == comp && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      reset();
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    // Moves if 7 is user  5 make comp
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == "" && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == ""){
      $("#5").text(comp);
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == user && $("#9").text() == ""){
      $("#9").text(comp);
    }
    
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      $("#1").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      $("#1").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      $("#1").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      $("#1").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      $("#4").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      $("#6").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      $("#6").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == comp && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      $("#6").text(comp);
    }
    
    
    
    // 7 and 9
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      $("#2").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      $("#2").text(comp);
      alert("COmputer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      $("#2").text(comp);
      alert("COmputer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      $("#2").text(comp);
      alert("COmputer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      $("#6").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      $("#4").text(comp);
      alert("Computer")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      $("#4").text(comp);
      alert("Computer")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      $("#1").text(comp);
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      reset();
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    // Moves if 8 is user 5 make comp
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == "" && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#5").text(comp);
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == ""){
      $("#9").text(comp);
    }
    
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == comp){
      $("#1").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == comp){
      $("#1").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == comp){
      $("#1").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == user && $("#9").text() == comp){
      $("#1").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == comp){
      $("#7").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == comp){
      $("#3").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == comp){
      $("#3").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == comp){
      $("#2").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == comp && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == comp){
      reset();
    }
    
    
    
    
    
    // Moves if 9 is user make 5 comp
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == "" && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#5").text(comp);
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#3").text(comp);
    }
    
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#7").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#7").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == "" && $("#9").text() == user){
      $("#7").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == user){
      $("#7").text(comp);
      alert("Computer Wins")
      reset();
    }
    
   else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == "" && $("#9").text() == user){
      $("#8").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == comp && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      $("#2").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == comp && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == user && $("#8").text() == comp && $("#9").text() == user){
      $("#2").text(comp);
      alert("Computer Wins")
      reset();
    }
 
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == "" && $("#8").text() == user && $("#9").text() == user){
      $("#7").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      $("#3").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      $("#3").text(comp);
      alert("Computer Wins")
      reset();
    }
    
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      $("#3").text(comp);
      alert("Computer Wins")
      reset();
      
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == "" && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == user && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      $("#3").text(comp);
      alert("Computer Wins")
      reset();
      
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == "" && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      $("#6").text(comp);
    }
    
    else if($("#1").text() == user && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      $("#4").text(comp);
      alert("Computer Wins")
      reset();
      
    }
   
    else if($("#1").text() == "" && $("#2").text() == user && $("#3").text() == user && $("#4").text() == "" && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      $("#4").text(comp);
      alert("Computer Wins")
      reset();
      
    }
    
    else if($("#1").text() == "" && $("#2").text() == "" && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      $("#1").text(comp)
    }
    
    else if($("#1").text() == comp && $("#2").text() == user && $("#3").text() == user && $("#4").text() == user && $("#5").text() == comp && $("#6").text() == comp && $("#7").text() == comp && $("#8").text() == user && $("#9").text() == user){
      reset();
    }
  }
  function reset1(){
    var nu = "";
    $(".square").fadeOut()
    $(".square").text(null).fadeIn()
  }
  
  function reset(){
    setTimeout(reset1,1000);
  }

  $('#reset').click(function(){
    reset();
  })
  
}
</script>