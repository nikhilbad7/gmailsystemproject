<?php
include 'regmodal.php'
?>
<html>
<head>
<script src="javascriptfiles/jq.js"></script>
<script src="javascriptfiles/messages.js"></script>
<link href="cssfiles/messages.css" rel="stylesheet">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>		
<script src="javascriptfiles/jquery.min.js"></script>
<script src="javascriptfiles/bootstrap.min.js"></script>
<link href="cssfiles/bootstrap.min.css" rel="stylesheet">
<link href="cssfiles/registerstyle.css" rel="stylesheet">
</head>
<body>
<div id="main">
	<div id="part1">
		<div class="container" id="car">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>

    <!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="images/finalcar1.jpg" alt="Gmail" style="width:100%;">
						<div class="carousel-caption">
						</div>
					</div>

					<div class="item">
						<img src="images/finalcar2.png" alt="Look" style="width:100%;">
						<div class="carousel-caption">
						</div>
					</div>
    
					<div class="item">
						<img src="images/finalcar3.jpg" alt="Chat" style="width:100%;">
						<div class="carousel-caption">
						</div>
					</div>
					<div class="item">
						<img src="images/finalcar4.png" alt="Smiley" style="width:100%;">
						<div class="carousel-caption">
						</div>
					</div>
  
				</div>

    <!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				  <span class="glyphicon glyphicon-chevron-left"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
				  <span class="glyphicon glyphicon-chevron-right"></span>
				  <span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
	<div id="part2">
		
		<div id="form">
			<form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input type="text" class="form-control" name="email" placeholder="Email" id="email">
					<span class="error">* <?php echo $emailErr;?></span>
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input type="password" class="form-control" name="password" placeholder="Password" id="password">
					<span class="error">* <?php echo $passErr;?></span>
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
					<input type="text" class="form-control" placeholder="mobileno." name="mob" id="mob">
					<span class="error">* <?php echo $mobErr;?></span>
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
					<input type="text"  class="form-control" placeholder="Enter your Address" name="add" id="add">
					<span class="error">* <?php echo $addressErr;?></span>
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
					<input type="file" class="form-control" name="f" id="pic">
				</div>
				<br><br>
				<input type="submit" class="btn btn-primary" name="submit" id="sub" value='SUBMIT'>
			</form>
		</div>
	</div>
</div>
</body>
</html>