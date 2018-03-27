<?php
include 'db.php';
echo "called";
$username=$_GET['username'];
$msg=$_GET['msg'];
echo "<script>alert('storeclick');</script>";
$q="insert into chat  VALUES ('null','$username','$msg','GETDATE()')";
$rs=$con->query($q);
if($rs){
	echo "<script>alert('msg sent successfully')</script>";	
}
else{
	echo "<script>alert('ERROR IN SENDING chatmsg')</script>";
	echo "<script>alert($q)</script>";
}

?>