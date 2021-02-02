<?php
$con = mysqli_connect('127.0.0.1:3306','root','','mjstudio');
$sql = "INSERT INTO test (testt) VALUES ('pjamil')";
if(mysqli_query($con, $sql))
{
	echo "WORKS!";
} else
{
	echo "FAILED";
}
//test
/*

$sql = "SELECT id, dp FROM image WHERE id='1'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

echo "<img src='data:image;base64," . base64_encode($row['dp']) . "/>";

*/

?>