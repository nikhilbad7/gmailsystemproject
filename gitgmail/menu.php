<html>
	<head>
	<script src="javascriptfiles/jquery.min.js"></script>
	<script src="javascriptfiles/bootstrap.min.js"></script>
	<link href="cssfiles/bootstrap.min.css" rel="stylesheet">
	<link href="cssfiles/menustyle.css" rel="stylesheet">
	</head>
	<body>
		<script>
			$(document).ready(function(){
				setInterval(function(){
					$('#bl').animate({
						top:'200px'},4000).animate({
						left:'1100px'},4000).animate({
						top:'430px'},4000).animate({
						top:'200px'},4000).animate({
						left:'420px'},4000).animate({
						top:'460px'},4000);
					},1000);
				});
		</script>
				<img src="images/finalboy.png" id="bo">
				<img src="images/finalgirl.png" id="go">
				<img src="images/finalblack.png" id="bl">
				<img src="images/j1.png" id="cloud">
				<img src="images/j1.png" id="cloud2">
				<img src="images/j1.png" id="cloud3">
				<img src="images/j1.png" id="cloud1">
		<div id="main1">
			
			<div class="container">
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
									<a href="modal.php"><span class="glyphicon glyphicon-log-in"></span>Login</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</body>
</html>