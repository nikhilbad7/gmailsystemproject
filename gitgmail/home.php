<?php
 session_start();
 include 'db.php';
if(!isset($_SESSION['email'])){
echo "<script>window.location='menu.php';</script>";
}
else{
	$name=$_SESSION['email'];
	$q="select * from mail where receiver='$name'";
	$rs=$con->query($q);
	echo "<div class='rght'>";
	echo "<table class='tabinbox'>";
	echo "<tr><td><b>SentBy</b></td><td><b>Subject</b></td></tr></table><table class='tabdata'>";
	while($row=mysqli_fetch_array($rs))
	{
		
	echo "<tr><td>$row[sendby]</td><td style='position:fixed; left:900px; width:400px;'><button onclick='show(this,$row[ID])' class='subutt'>$row[subject]</button></td></tr>";	
	}
	
	echo "</table></div>"; 
}
	?> 

<html>
<head>
<link href="cssfiles/stylehome.css" rel="stylesheet">
<link rel="stylesheet" href="cssfiles/chatstyle.css" media="all" />
<script src="http://code.responsivevoice.org/responsivevoice.js"></script>

	<script>
	var flag=0;
	function run_ajax(){
	if (flag){
		
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if(this.readyState == 4 && this.status == 200){
				
			var showch= document.getElementsByClassName('chat_data');
			showch[0].innerHTML = this.responseText;
			}
		}
		xhttp.open('GET', 'showchat.php', true);
		xhttp.send(); 
	
	
	//setInterval(function(){chat_ajax()}, 1000)
	}}
</script>
</head>
<script>
function chatstore(username,msg){
		
		var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		
       // var y=document.getElementsByClassName("rght");
		//y[0].innerHTML =this.responseText;
		flag=1;
		run_ajax();
    }
  };
  xhttp.open("GET", "chatstore.php?username="+username+"&msg="+msg, true);
  xhttp.send();
		
}
function show(which_button,button_ID){
	
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
          var x=  document.getElementsByClassName("rght");
			x[0].innerHTML= this.responseText;
    }
  };
  xhttp.open("GET", "msgfetch.php?id="+button_ID, true);
  xhttp.send();
}
function navigate(){
			location.reload();
		}
function compose(){
	
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		
        var y=document.getElementsByClassName("rght");
		y[0].innerHTML =this.responseText;
    }
  };
  xhttp.open("GET", "compose1.php", true);
  xhttp.send();
}
function outbox(){
	
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		
         var z=document.getElementsByClassName("rght");
		 z[0].innerHTML =this.responseText;
    }
  };
  xhttp.open("GET", "outbox.php", true);
  xhttp.send();
}
function out(which_button,button_ID){
	
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		
          var w=document.getElementsByClassName("rght");
		  w[0].innerHTML =this.responseText;
    }
  };
  xhttp.open("GET", "outfetch.php?id="+button_ID, true);
  xhttp.send();
}
function chat(){
	
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		
		
       var chat=document.getElementsByClassName("rght");
	   chat[0].innerHTML =this.responseText;
	  
    }
  };
  xhttp.open("GET", "chat1.php", true);
  xhttp.send();
}
</script>
<body>
<div id="main">
<div id="header">
<a href="https://www.google.co.in/"><img src="images/ggresize.png" id="goog"></img></a>
<input type="text" name="search" id="search" placeholder="search">
</div>
<div id="content">
	<div id="left">
	
		<table id="tab">	
		<tr>
			<td>
				<a onclick='compose()' class="anc"><i>Compose</i></a><br><br>
			</td>
		</tr>
		<tr>
			<td>
				<a href="home.php" class="anc"><i>Inbox</i></a><br><br>
			</td>
		</tr>
		<tr>
			<td>
				<a onclick='outbox()' class="anc"><i>Outbox</i></a><br><br>
			</td>
		</tr>
		<tr>
			<td>
				<a onclick='chat()' class="anc"><i>Chat</i></a><br><br>
			</td>
		</tr>
		<tr>
			<td>
				<a href="logout.php" class="anc"><i>Logout</i></a><br><br>
			</td>
		</tr>
	</table>
	</div>
	<div id="rght">	
		<table class="tabinbox">
			
		</table>
		<table class="tabdata">
			
		</table>
		
	</div>
</div>


</div>
</body>
</html>