<?php
session_start();
?>
<html>
<head>
<link href="cssfiles/successfull.css" rel="stylesheet">
<script src="javascriptfiles/jquery.min.js"></script>
<script src="javascriptfiles/bootstrap.min.js"></script>	
<link href="cssfiles/bootstrap.min.css" rel="stylesheet">
<link href="cssfiles/menustyle.css" rel="stylesheet">
</head>
<body>
<div id="main">
<div class="container">
		<p id="r"><b>REGISTRATION SUCCESSFULL</b></p>
		<p id="r1">YOU CAN LOGIN NOW</p><br>
		<p id="r2"><input type="button" id="butt" onclick="show()" value="login" id="log"></p>
		<img src="images/j1.png" id="cloud">
		<img src="images/j1.png" id="cloud2">
		<img src="images/j1.png" id="cloud3">
		<img src="images/j1.png" id="cloud1">
		<nav class="navbar navbar-default" id="nav">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>HELP</b> 
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="about.php">About</a>
								</li>
								<li>
									<a href="create.php">How To Create a Gmail Account</a>
								</li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="registermodal.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
						</li>
						<li>
						<a href="modal.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</div>
<script>
function show(){
	window.location="menu.php";
}
</script>
</body>
</html>