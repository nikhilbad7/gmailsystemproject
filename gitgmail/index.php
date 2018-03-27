<?php
session_start();
if(isset($_REQUEST["b1"])){
	echo "<script>window.location='menu.php';
	</script>";
}
?>
<html>
	<body>
		<link href="cssfiles/indexstyle.css" rel="stylesheet">
		<div id="main">
			<div id="header">
				<img src="images/j1.png" id="cloud">
				<img src="images/j1.png" id="cloud1">
				<p id="wel">
					<b>WELCOME TO GMAIL</b>
				</p>
			</div>
			<div id="footer">
				<img src="images/newdone.png" id="img">
				<img src="images/j1.png" id="cloud2">
				<img src="images/j1.png" id="cloud3">
			</div>
		</div>
		<form>
			<input type="submit" value="welcome to gmail" name="b1" id="b">
		</form>
		<script src="javascriptfiles/jq.js">
		</script>
		<script>
			$(document).ready(function(){
				setInterval(function(){
					$('#cloud').animate({
						left:'1000px'},10000).animate({left:'100px'},10000);
						$('#cloud1').animate({
							left:'100px'},10000).animate({left:'1000px'},10000);
							$('#cloud2').animate({
								left:'1100px'},10000).animate({left:'100px'},10000);
								$('#cloud3').animate({
									left:'100px'},10000).animate({left:'1100px'},10000);
									},1000);
								});
		</script>
</body>
</html>