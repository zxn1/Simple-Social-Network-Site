<?php
$con = mysqli_connect('127.0.0.1:3306','root','','mjstudio');
if($_POST['pust']) {
	$sql = "select id, image from gambo where id='" . $_POST['id'] . "'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	echo '<img src="data:image;base64,'. base64_encode($row['image']) . '"/>';
} else {
	echo "no post anymore!";
}
?>
<html>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<input type="text" name="id"></input>
<input type="submit" name="pust" value="click"></input>
</form>