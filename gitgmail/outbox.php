<?php
session_start();
include 'db.php';
if(!isset($_SESSION['email'])){
echo "<script>window.location='menu.php';</script>";}
else{
	$name=$_SESSION['email'];
	$q="select * from mail where sendby='$name'";
	$rs=$con->query($q);
	echo "<div class='rght'>";
	echo "<table class='tabinbox'><tr><td><b>Sendto</b></td><td><b>Subject</b></td></tr>";
	while($row=mysqli_fetch_array($rs))
	{
	echo "<tr><td>$row[receiver]</td><td><input type='button' value='$row[subject]' onclick='out(this,$row[ID])' class='outsub' name='outbox'></td></tr>";
	}
echo	"</table></div>";
}
?>