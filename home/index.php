<?php
/*
a few documentation
nanti betulkan height jadikan semua percent..sebab bila zoom in or zoom out dia jdi kecik.. canne na baca odo~
tapi nasib deme le..dah default 100%
*/
session_start();
require("../f-pages/security/security-2/database/db.php");
//check
if(!(isset($_SESSION['user']))){
	header("location:../");
}
//final
error_reporting(0);
//for dpcover dpprofile
$sql = "SELECT * FROM user_info WHERE username='" . $_SESSION['username'] . "'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
if(count($_POST['post-status'])>0)
{
	//set limit text posted 90 char je status
	$getstatus = $_POST['status'];
	$sqlstatus = "INSERT INTO status (postby, time, text) VALUES ('" . $_SESSION['username'] . "', now(), '" . $getstatus . "')";
	if(mysqli_query($con, $sqlstatus)) {
		header("location:#posted=$getstatus");
	} else {
		header("location:#error");
	}
}
?>
<html>
<head>
<style>
#page {
	width : 80%;
	background-color : #f2f2f2;
	z-index : -1;
	box-shadow : 2px 2px 10px grey;
}
.backimage {
	height : 70%;
	width : 101%;
	position : absolute;
	background-image: url("../sources/img/background.jpg");
	background-size: cover;
	top: -10px;
	left : -1%;
	z-index : -1;
	opacity : 0.8;
	filter: blur(10px);
}
.navbar {
	position : fixed;
	background-color : white;
	opacity : 0.5;
	height: 85px;
	width : 101%;
	left : -10px;
	top : 0px;
	box-shadow : 5px 5px 10px grey;
	z-index :  1;
	transition : 0.2s;
}
.navbar:hover {
	opacity : 0.7;
	height: 95px;
}
#imageinside {
	position : relative;
	top: 5px;
	height : 300px;
	width : 98.5%;
	box-shadow : 5px 5px 10px grey;
	opacity : 1.0;
	transition : 0.15s;
}
#imageinside:hover {
	width: 100.5%;
	height : 305px;
	left : -0.25%;
	top : -.25%;
	opacity : 0.6;
}
.see {
	height :40px;
	width : 90%;
	left : 0%;
	position : relative;
	border-style: solid;
	background-color : #f2f2f2;
	border-color : white;
	border-radius : 15px;
	opacity : 1.0;
	box-shadow : 1px 1px 5px grey;
}
.see:hover {
	opacity : 0.8;
	box-shadow : 2px 2px 10px grey;
}
.profile-holder {
	
}
#dp-profile {
	border-style : solid;
	border-color : #e6e6e6;
	height : 150px;
	width : 150px;
	border-radius : 50%;
	position : absolute;
	top  : 230px;
	left : 63%;
	shadow : 5px 5px 10px grey;
	filter : blur(0.8px);
	border-width : 2px;
	transition : 0.5s;
}
#dp-profile:hover {
	filter : blur(0px);
	height : 155px;
	width : 155px;
}
#dp-name {
	top  : 305px;
	left : 55%;
	color : black;
	position : absolute;
	z-index : 2;
}
#dp-cover {
	height : 250px;
	width : 60%;
	left : 20%;
	top  : 100px;
	position : absolute;
	border-style : solid;
	border-color : white;
	border-width : 1px;
	opacity : 0.8;
	box-shadow : 2px 2px 35px grey;
	transition : 0.8s;
	border-radius : 25px;
}
#dp-cover:hover {
	opacity : 1.0;
	border-radius : 0px;
}
.div-wall {
	border: none;
	background-color : white;
	width : 55%;
	position : relative;
	left : -10%;
	border-radius : 20px;
}
.stylepost {
	height : 50px;
	width : 60%;
	border-style : solid;
	position : relative;
	border-color : #e6e6e6;
	color : grey;
	border-radius : 15px;
	transition : 0.2s;
}
.stylepost:hover {
	width : 62%;
	color : black;
}
.styleposting {
	height : 50px;
	position : relative;
	border-color : #e6e6e6;
	color : grey;
	border : none;
	width : 20%;
	left : 5px;
	border-radius : 5px;
	transition : 0.2s;
}
.styleposting:hover {
	width : 22%;
	color : black;
}
.postedstatus {
	border-style : solid;
	width : 95%;
	height : 170px;
	color : grey;
	padding : -5px;
	border-radius : 25px;
	border-style : solid;
	border-color : #e6e6e6;
	background-color : white;
	border-width : 1px;
	box-shadow : 1px 1px 5px grey;
}
#fontstatus {
	top : 10%;
	font-size : 32px;
	position : relative;
}
.statusonhover {
	opacity : 0.0;
	height : 170px;
	width : 95%;
	border-radius : 25px;
	border : none;
	position : absolute;
	z-index : 2;
	transition : 0.3s;
	box-shadow : 2px 2px 10px grey;
}
.statusonhover:hover {
	opacity : 0.95;
	background-color : white;
}
.statusinfocss {
	top : 20%; 
	position : absolute; 
	left: 40%; 
	height : 100px; 
	width : 100px;
	border-radius : 50%;
}
.navstickyside {
	top : 100px;
	position : sticky;
	border-style : solid;
	height : 30%;
	width : 100%;
	background-color : white;
	border : none;
	border-radius : 25px;
}
.navsideabsolute {
	top : 400px;
	left : 65%;
	position : absolute;
	height : 200%;
	width : 15%;
	border : none;
}
.logoutnav {
	font-size:25px;
	top : 20%;
	left : 70%;
	position : absolute; 
	font-family : Garamond;
	border: none;
	width : 250px;
	transition : 0.3s;
	opacity : 0.3;
}
.logoutnav:hover {
	opacity : 1.0;
}
.blognav {
	top : 20%;
	left : 18%;
	position : absolute; 
	border: none;
	opacity : 0.3;
	transition : 0.3s;
}
.blognav:hover {
	opacity : 1.0;
}
</style>
<title>WALL</title>
</head>
<body>
<center>
<div class="navbar"><center>
<p style="color : black; font-family : Garamond; font-size: 25px; top : 5%; position :relative;"> MJ CONNECT - PLATFORM </p></center>

<div class="blognav">
<a href="blog/"><img src="../sources/img/blog.png" style="top : -15px; position : absolute;"></a>
</div>

<a href="../../f-pages/security/security-2/database/destroysession.php">
<div class="logoutnav">
<img style="height: 60px; width : 90px; left: 0px; position : absolute;" src="../sources/img/logout.png">
<p style="position : absolute; left : 90px;top : -8px;">LOG OUT</p></a></div>
</div>
<div class="backimage"></div>
<div id="page">
<img id="imageinside" src="../sources/img/front-home.jpg">
<br><br><br><br>
<div class="div-wall"><br>HOME<br> <p style="position : relative; left : -150px; top : -10px; color: grey;">Make a Status!</p>
<p style="font-size:2px;"><br></p>
<form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="POST" style="position : relative; top : -20px;">
<input class="stylepost" type="text" value="&nbsp;&nbsp;&nbsp;What do you Think right now?" name="status"></input>
<input class="styleposting" type="submit" value="POST!" name="post-status"></input>
</form>
</div>

<div class="navsideabsolute">
<div class="navstickyside">
<br>
//tak tahu nak letak kat sini apa..
<br>
//soon will be updated!
<br><br>
//DEM SON
</div>
</div>

<p style="font-size:10px;"><br></p>
<div class="div-wall">
<p style="color : grey;"><br>WALL : STATUS POSTED!<br>&nbsp;</p>
</div>
<div class="div-wall">

<p style="font-size:5px;"><br></p>
</html>
<?php
session_start();
//start here get final row
$getpost = "SELECT id, postby FROM status ORDER BY id";
$resget = mysqli_query($con, $getpost);
$rowcount = mysqli_num_rows($resget);
//final here
$countid = $rowcount;
$counter = 0;
$calculate = 0;
while($counter < 5) {
	$getpost = "SELECT id, postby, time, text FROM status WHERE id='" . $countid . "'";
	$resget = mysqli_query($con, $getpost);
	$getpostarr = mysqli_fetch_array($resget);
	//for userinfo
	$sqlstatusdp = "SELECT username, dpprofile FROM user_info WHERE username='" . $getpostarr['postby'] . "'";
	$resstatusdp = mysqli_query($con, $sqlstatusdp);
	$arrstatusdp = mysqli_fetch_array($resstatusdp);
	//image purpose
	if(is_array($getpostarr))
	{
		echo "<p id='postid" . $getpostarr['id'] . "' style='position: relative;left : -40%;'>#ID" . $getpostarr['id'] . "</p>
		<div class='postedstatus'>
		<div class='statusonhover'>posted by : MJer#" . $getpostarr['postby'] . "
		<img class='statusinfocss' src='data:image;base64," . base64_encode($arrstatusdp['dpprofile']) . "'/>
		<p style='position : absolute; bottom : 1px;left : 35%;'>At " .$getpostarr['time'] . "</p>
		</div>
		<p id='fontstatus'>" . $getpostarr['text'] . "<br></p>
		</div>" ;
		$countid--;
		$_SESSION['count'] = $countid;
		$calculate = ($countid + 1) - $counter;
	} else {
		header:("location:#failed_getstatus_or_itslimit");
		$counter = 5;
		break;
	}
	$counter++;
}
require("continue.php");
?>