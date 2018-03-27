<?php
session_start();
include 'db.php';
if(!(isset($_SESSION['email']))){
echo "<script>window.location='menu.php';</script>";}
elseif(isset($_POST['compose'])){
$sendby=$_SESSION["email"];
$rec=$_POST["receiver"];
$sub=$_POST["sub"];
$desc=$_POST["desc"];
$msg=$_POST["ms"];
$q="insert into  mail values('$sendby','$sub','$desc','$msg','null','$rec')";
$rs=$con->query($q);
if($rs){
	echo "<script>alert('msg sent successfully')</script>";
	echo "<script>window.location='home.php';
	</script>";
}
else{
	echo "<script>alert('ERROR IN SENDING email')</script>";
}
}
?>