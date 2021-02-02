<?php
	function add($a,$b){
		$c=$a+$b;
		return $c;
	}
?>
<html>
<style>
</style>
<body>
<p id="test">WOW</p>
<button onclick="test()" value="click"/>
</body>
<script>
	function test() {
		var phpadd = <?php echo add(23421,1231232);?> //call the php add function
		document.getElementById("test").innerHTML = phpadd;
	}
</script>
</html>