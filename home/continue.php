<?php 
session_start();
if(count($_POST['seem'])>0) {
	$counter = 0;
	$countid = $_SESSION['count'];
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
			header:("Location:#failed_getstatus_or_itslimit");
			$counter = 5;
			break;
		}
		$counter++;
	} 
}
?>
<html>
<style>
html {
  scroll-behavior: smooth;
}
</style>
<br>
<div class="see">
<form action="<?php echo($_SERVER['PHP_SELF']);?>?seemore#postid<?php echo $calculate; ?>" method="POST">
<input type="submit" id="seem" name="seem" value="See More!" style="position:relative; height : 100%; width: 100%;background-color : transparent;border:none;font-size: 14px;"></input>
</form>
</div>
<br>
</div>
<p style="font-size:5px;"><br></p>
</center>
<img src="<?php echo "data:image;base64," . base64_encode($row['dpcover']); ?>" id="dp-cover">
<p id="dp-name"><?php echo $_SESSION['username']; ?></p>
<div style="top  : 315px; left : 51%; position : absolute; background-color : white; height : 35px; width : 200px;z-index: 0;border-radius : 20px;opacity : 0.6;"></div>
<img src="<?php echo "data:image;base64," . base64_encode($row['dpprofile']); ?>" id="dp-profile">
</body>
<script>
function getget()
{
	
}
</script>
</html>