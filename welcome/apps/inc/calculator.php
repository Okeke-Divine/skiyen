<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<?php 

	  session_start();
	  include("../../../conn.php");
	  include("../../../css.php");
	  include("../../ses.php");
	  include("../../ver.php");

  	?>
  <title><?php echo $ses_uname; ?> | Calculator | Skiyen</title>
  <link rel="shortcut icon" href="../../logo/s1.png">
  <meta name="robots" content="index,follow">
</head>
<body>

<div id="container">
	<div id="calculator">
		<div id="result">
			<div id="history">
				<p id="history-value"></p>
			</div>
			<div id="output">
				<p id="output-value"></p>
			</div>
		</div>
		<div id="keyboard">
			<button class="operator" id="clear">C</button>
			<button class="operator" id="backspace">CE</button>
			<button class="operator" id="%">%</button>
			<button class="operator" id="/">&#247;</button>
			<button class="number" id="7">7</button>
			<button class="number" id="8">8</button>
			<button class="number" id="9">9</button>
			<button class="operator times" id="*">&times;</button>
			<button class="number" id="4">4</button>
			<button class="number" id="5">5</button>
			<button class="number" id="6">6</button>
			<button class="operator minus" id="-">-</button>
			<button class="number" id="1">1</button>
			<button class="number" id="2">2</button>
			<button class="number" id="3">3</button>
			<button class="operator" id="+">+</button>
			<button class="empty" id="empty"></button>
			<button class="number" id="0">0</button>
			<button class="empty" id="empty"></button>
			<button class="operator" id="=">=</button>
		</div>
	</div>
</div>
</body>
</html>
<style type="text/css">
	body{
		font-family: 'Open Sans',sans-serif;
		background: linear-gradient(to right, #eee, white);
	}
	#container{
		width:100%;
		height: 100%;
		background: transparent;
		margin: 0px;
		padding: 0px;
		position: relative;
		top: -20px;
	}
	#calculator{
		width: 320px;
		height: 530px;
		background-color: #eaedef;
		margin: 0px auto;
		top: 20px;
		position: relative;
		border-radius: 5px;
	}
	#results{
		height: 120px;
	}
	#history{
		text-align: right;
		height: 20px;
		margin: 0 20px;
		padding-top: 20px;
		font-size: 15px;
		color: #919191;
	}
	#output{
		text-align: right;
		height: 60px;
		margin: 10px 20px;
		font-size: 30px;
	}
	#keyboard{
		height: 400px;

	}
	.operator, .number, .empty{
		width: 50px;
		height: 50px;
		margin: 15px;
		float: left;
		border-radius: 50%;
		border-width: 0;
		font-weight: bold;
		font-size: 15px;
	}
	.number, .empty{
		background-color: #eaedef;
	}
	.number, .operator{
		cursor: pointer;
	}
	.operator:active, .number:active{
		font-size: 13px;
	}
	.operator:focus, .number:focus, .empty:focus{
		outline: 0;
	}
	button:nth-child(4){
		font-size: 20px;
		background-color: #2062aa;
	}
	.times{
		font-size: 20px;
		background-color: #ffa500;
	}
	.minus{
		font-size: 20px;
		background-color: #f08080;
	}
	button:nth-child(16){
		font-size: 20px;
		background-color: #7d93e0;
	}
	button:nth-child(20){
		font-size: 20px;
		background-color: #9477af;
	}
</style>
<script type="text/javascript">
	function getHistory(){
		return document.getElementById("history-value").innerText;
	}
	function printHistory(num){
		document.getElementById("history-value").innerText=num;
	}
	function getOutput(){
		return document.getElementById("output-value").innerText;
	}
	function printOutput(num){
		if (num=="") {
			document.getElementById("output-value").innerText=num;
		}
		else{
			document.getElementById("output-value").innerText=getFormattedNumber(num);	
		}
		
	}
	function getFormattedNumber(num){
		if(num=="-"){
			return "";
		}
		var n = Number(num);
		var value = n.toLocaleString("on");
		return value;
	}
	function reverseNumberFormat(num){
		return  Number(num.replace(/,/g,''))
	}
	var operator = document.getElementsByClassName("operator");
	for(var i =0;i<operator.length;i++){
		operator[i].addEventListener('click',function(){
			if(this.id=="clear"){
				printHistory("");
				printOutput("");
			}
			else if(this.id=="backspace"){
				var
				output=reverseNumberFormat(getOutput()).toString();
				if(output){//if output has a value
					output= output.substr(0,output.length-1);
					printOutput(output);
				}
			}
			else{
				var output=getOutput();
				var history=getHistory();
				if(output==""&&history!=""){
					if(isNaN(history[history.length-1])){
						history= history.substr(0,history.length-1);
					}
				}
				if(output!="" || history!=""){
					output= output==""?
					output:reverseNumberFormat(output);
					history=history+output;
					if(this.id=="="){
						var result=eval(history);
						printOutput(result);
						printHistory("");
					}
					else{
						history=history+this.id;
						printHistory(history);
						printOutput("");
					}
				}
			}
		});
	}
	var number = document.getElementsByClassName("number");
	for(var i =0;i<number.length;i++){
		number[i].addEventListener('click',function(){
			var output=reverseNumberFormat(getOutput());
			if (output!=NaN) { //if output is a number
				output=output+this.id;
				printOutput(output);
			}
		});
	}
</script>