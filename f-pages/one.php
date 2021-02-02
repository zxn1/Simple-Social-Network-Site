<html>
<head>
<style>
.page {
	height : 55%;
	width : 102%;
	left : -10px;
	position : absolute;
	background-color : #ffccff;
}
.style-box {
	position : relative;
	top : 25%;
	left : 20%;
	height : 200px;
	width : 800px;
	border-style : solid;
	border-radius : 30px;
	border-color : white;
	box-shadow : 2px 2px 10px grey;
	opacity : 0.6;
	transition : 0.2s;
}
.style-box:hover {
	opacity : 1.0;
	height : 210px;
	width : 810px;
	top : 24.5%;
	left : 19.5%;
	filter : blur(3px);
}
.style-box:active {
	height : 200px;
	width : 800px;
	top : 25%;
	left : 20%;
	filter : blur(0px);
}
#profile-style-box {
	border-style : dashed;
	border-radius : 50%;
	border-color : black;
}
.insidebox {
	position : absolute;
	left : 200px;
	top : 10%;
}
#contactus {
	font-size: 38px;
	position : absolute;
	left : 290px;
	top: 13%;
	color : red;
}
.popupcontact{
	border-color: white;
	position : absolute;
	height : 200px;
	width : 800px;
	background-color:white;
	border-color: black;
	opacity : 0.0;
	z-index : 2;
	transition : 0.1s;
}
.popupcontact:active {
	height : 400px;
	width : 1000px;
	border-style : dashed;
	opacity : 1.0;
	background-color:white;
	top : -300px;
	left : -100px;
	border-width : 1px;box-shadow :2px 5px 10px grey;
}
</style>
</head>
<body>
<div class="page">
<img src="/sources/img/deco-down.gif" style="position: absolute; left: 30px;">
<div class="style-box"><div class="popupcontact">
<center><p style="font-family: Arial; size:112px;">CONTACT US!</p></center>
<center><p>Anything need to be improve? (Keep connect with MJ Connect)</p></center>
<br>
<img style="left:24%; position:absolute;" src="/sources/img/socmed/email-ico.png">
<img style="left:43%; position:absolute;" src="/sources/img/socmed/tel-ico.png">
<img style="left:62%; position:absolute;" src="/sources/img/socmed/instagram-ico.png">
<img style="left:81%; position:absolute;" src="/sources/img/socmed/whatsapp-ico.png">
<img style="left:5%; position:absolute;" src="/sources/img/socmed/youtube-ico.png">
<p style="font-family: Arial; size:112px; left:5.5%; bottom : 50px; position : absolute;">YOUTUBE : <br> MJ STUDIO <br><br> #SUBSCRIBE <br> NOW!</p>
<p style="font-family: Arial; size:112px; left:24.5%; bottom : 100px;position : absolute;">EMAIL : <br> (Coming Soon!)</p>
<p style="font-family: Arial; size:112px; left:43.5%;bottom : 100px; position : absolute;">TELEPHONY : <br> +1-(Coming Soon!)</p>
<p style="font-family: Arial; size:112px; left:62.5%;bottom : 100px; position : absolute;">INSTAGRAM : <br> (Coming Soon!)</p>
<p style="font-family: Arial; size:112px; left:81.5%;bottom : 100px; position : absolute;">WHATSAPP : <br> +1-(Coming Soon!)</p>
</div>
<img id="profile-style-box" src="/sources/img/profile.png" height="150px" width="150px" style="top : 10px; left : 10px; position : relative;"> 
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEV CONTACT</p>
<div class="insidebox"><p style="position : relative;font-size : 50px">MJ STUDIO |</p>
<p id="contactus"> #CONTACT&nbsp;US!</p></div>
</div>
<center><p style="position : relative; bottom: -80px; opacity : 0.5;">&copy; Copyright 2020-2025</p></center>
</div>
</body>
<script>
var i = 0, z = 0;
var speed = 300;
var txt = "#CONTACT";
var txtcon = "US!"
var here = "#clickhere";
var x;
document.getElementById("contactus").innerHTML = "";
contactus();
function contactus() {
	if (i < txt.length) {
		document.getElementById("contactus").innerHTML += txt.charAt(i);
		i++;
		setTimeout(contactus, speed);
	}
	if(document.getElementById("contactus").innerHTML == "#CONTACT"){
		document.getElementById("contactus").innerHTML += "&nbsp;";
		setTimeout(uscontinue, speed);
	}
}
function uscontinue() {
	if (z < txtcon.length) {
		document.getElementById("contactus").innerHTML += txtcon.charAt(z);
		z++;
		setTimeout(uscontinue, speed);
	} else {
		x = 0;
		document.getElementById("contactus").innerHTML = "";
		clickhere();
	}
}
function clickhere() {
	if(x < here.length) {
		document.getElementById("contactus").innerHTML += here.charAt(x);
		x++;
		setTimeout(clickhere, speed);
	} else {
		setnothing();
	}
}
function setnothing() {
	setTimeout(0, speed);
		document.getElementById("contactus").innerHTML = "";
		z = 0, i = 0;
		contactus();
}
</script>
</html>