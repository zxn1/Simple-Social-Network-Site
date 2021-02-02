<?php
if(count($_POST)>0){
	$con = mysqli_connect('127.0.0.1:3306','root','','mjstudio');
	$query = "SELECT username,password FROM user WHERE password='" . $_POST['pass'] . "'";
	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_array($result);
	if(is_array($row)){
		echo "MANTUL";
	} else {
		echo "SOMETHING WRONG";
	}
}
?>
<html>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" name="username"></input>
<input type="submit" value="submit"></input>
</form>
</html>