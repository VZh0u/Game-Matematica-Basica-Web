<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
#dialogoverlay{
	display: none;
	opacity: .8;
	position: fixed;
	top: 0px;
	left: 0px;
	background: black;
	width: 100%;
	z-index: 10;
}
#dialogbox{
	display: none;
	position: fixed;
	background: #000;
	border-radius:7px;
	width:550px;
	z-index: 10;
}
#dialogbox > div{margin:8px; }
#dialogbox > div > #dialogboxhead{ background: red; font-size:25px; padding:10px; color:white; }
#dialogbox > div > #dialogboxbody{ background:black; padding:10px; font-size:20px; color:#FFF; }
#dialogbox > div > #dialogboxfoot{ background: black; text-align:right; }
</style>
<script>
function CustomAlert(){
    this.error = function(dialog){
        var winW = window.innerWidth;
        var winH = window.innerHeight;
        var dialogoverlay = document.getElementById('dialogoverlay');
        var dialogbox = document.getElementById('dialogbox');
        dialogoverlay.style.display = "block";
        dialogoverlay.style.height = winH+"px";
        dialogbox.style.left = (winW/2) - (550 * .5)+"px";
        dialogbox.style.top = "100px";
        dialogbox.style.display = "block";
        document.getElementById('dialogboxhead').innerHTML = "Erro";
        document.getElementById('dialogboxbody').innerHTML = dialog;
        document.getElementById('dialogboxfoot').innerHTML = '<button class="btn danger" align="center" style="color:white; margin:2%; background:red;" onclick="Alert.ok()">OK</button>';
    }
	this.ok = function(){
		document.getElementById('dialogbox').style.display = "none";
		document.getElementById('dialogoverlay').style.display = "none";
	}
}
var Alert = new CustomAlert();
</script>
</head>
<body>
<div id="dialogoverlay"></div>
<div id="dialogbox">
  <div>
    <div id="dialogboxhead"></div>
    <div id="dialogboxbody">
  </div>
    <div id="dialogboxfoot"></div>
  </div>
</div>
</body>
</html>
