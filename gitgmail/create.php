<html>
	<head>
		<script src="javascriptfiles/jquery.min.js"></script>
		<script src="javascriptfiles/bootstrap.min.js"></script>
		<link href="cssfiles/bootstrap.min.css" rel="stylesheet">
		<link href="cssfiles/createstyle.css" rel="stylesheet">
	</head>
	<body>
		<script>
			function swap(){
				window.location="registermodal.php";
			}
		</script>
		<div id="main">
			<div class="container">
				<nav class="navbar navbar-default"id ="nav">
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
									<a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>HELP</b> <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="about.php">About</a></li>
										<li><a href="menu.php">Get Back to Menu page</a></li>
									</ul>
								</li>
							</ul>
							<ul class="nav navbar-nav navbar-middle">
								<li><a href="registermodal.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
								<li><a href="modal.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>

		<div id="header">
		<table id="p1">
			<tr>
				<td>
					<h1>Create a Gmail Account</h1>
				</td>
			</tr>
			<tr>
				<td>
					<h2>To signup for Gmail, click on the signup Button on the top Right corner.</h2>
				</td>
			</tr>
		</table>
		</div>
		<div id="footer">
			<table id="t">
				<tr>
					<td>
						<h2>It's free to create a Gmail Account.You can use the username and password<br> to login into your Gmail Account.</h2>
					</td>
				</tr>
				<tr>
					<td>
						<h3>1.Visit the Registration page for signup.</h3>
					</td>
				</tr>
				<tr>
					<td>
						<h3>2.Fill all the details required for Registration.</h3>
					</td>
				</tr>
				<tr>
					<td>
						<h3>3.Then click on the submit  button to get registered.</h3>
					</td>
				</tr>
				<tr>
					<td>
						<h3>4.You can also click on this below button to create your account.</h3>
					</td>
				</tr>
		</table>
		</div>
		<div id="footer2">
		<input type="button" value="Create An Account" id="b" onclick="swap()">
		</div>
		</div>
	</body>
</html>