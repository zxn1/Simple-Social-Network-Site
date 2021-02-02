<?php
session_start();
echo $_SESSION['count']; 
echo $_SESSION['username'];
?>
<html>
<center>
<h1 id="test">te</h1>
<a href="?test#test">click here!</a>
</center>
<script>
</script>
<div style="height : 100%; width: 100%;"></div>
<p id="test">test1</p>
<div style="height : 100%; width: 100%;"></div>
<p id="test">test2</p>
<div style="height : 100%; width: 100%;"></div>
<p id="test">test3</p>
<div style="height : 100%; width: 100%;"></div>
</html>