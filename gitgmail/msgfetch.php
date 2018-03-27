<?php
session_start();
include 'db.php';
$id=$_GET['id'];
if(!isset($_SESSION['email'])){
echo "<script>window.location='menu.php';</script>";
}
else{
	$name=$_SESSION['email'];
	$q="select * from mail where receiver='$name' and ID='$id' ";
	$rs=$con->query($q);
	echo "<div class='rght'>";
	echo "<table class='tabinbox'>";
	echo "<tr><td><b>Back</b></td><td><b>SentBy</b></td><td><b>Subject</b></td><td><b>Description</b></td><td><b>Message</b></td><td><b>Voice</b></td></tr>";
	while($row=mysqli_fetch_array($rs))
	{	
	echo "<tr><td><input type='button' value='Go Back' onclick='navigate()'></td><td>$row[sendby]</td><td>$row[subject]</td><td>$row[description]</td><td>$row[message]</td><td>";
	$data="Sent By ". $row['sendby']." Subject IS ". $row['subject']."Description".$row['description']."and Message is".$row['message'];
	?>
	<input onclick='responsiveVoice.speak("<?php echo $data; ?>");' type='button' value="Play" class="voice" />
<?php
	echo "</td></tr>";
	}
	
	echo "</table></div>"; 
}
	?>