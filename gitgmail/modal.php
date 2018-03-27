<?php
$emailErr='';
$passErr='';
include 'logmodal.php';
?>
<html>
<head>
<script src="javascriptfiles/jquery.min.js"></script>
<script src="javascriptfiles/bootstrap.min.js"></script>
<link href="cssfiles/bootstrap.min.css" rel="stylesheet">
<link href="cssfiles/modalstyle.css" rel="stylesheet">
<link href="cssfiles/successfull.css" rel="stylesheet">
<link href="cssfiles/menustyle.css" rel="stylesheet">
</head>
<body>
<div id="main">
		<img src="images/j1.png" id="cloud">
		<img src="images/j1.png" id="cloud5">
		<img src="images/j1.png" id="cloud4">
		<img src="images/j1.png" id="cloud6">
		<img src="images/j1.png" id="cloud1">
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
					</ul>
				</div>
			</div>
		</nav>
  <form method="post"id="form">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
	  <span class="error">* <?php echo $emailErr;?></span>
    </div>
	<br>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
	  <span class="error">* <?php echo $passErr;?></span>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
	<br>
    <input type="submit" class="btn btn-default" name="login" id="butt" value='SUBMIT'>
  </form>
</div> 
</div>
</body>
</html>