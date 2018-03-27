<?php
include 'db.php';
$passErr = $emailErr = $mobErr = $addressErr ="";
$email = $pass = $mob = $add ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($_POST["password"])) {
    $passErr = "Password is required";
  } else {
    $pass = test_input($_POST["password"]);
    if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,50}$/', $pass)) {
      $passErr = "The password must contains 1number,and 1 specialcharacter"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["mob"])) {
    $mobErr = " please fill this field";
  } else {
    $mob = test_input($_POST["mob"]);
    
    if (!preg_match("/^(\+\d{1,3}[- ]?)?\d{10}$/",$mob)) {
      $mobErr = "Invalid mobileno"; 
    }    
  }
  
  if (empty($_POST["add"])) {
    $addressErr = " please fill this field";
  }




	$add=$_REQUEST['add'];
	$image=$_FILES['f']['name'];
	$tmp=$_FILES['f']['tmp_name']; 
	 if(move_uploaded_file($tmp,$image))
    {
	$q="insert into registration  values('$email','$pass','$mob','$add','$image')";
	$rs=$con->query($q);
	if($rs)
	{
		echo"<script>
			window.location='registrationsuccessfull.php';
			</script>
		";
	}
	else
	{
			echo "Error while registering";
	}


}
else{
	echo "error while uploading image";
}}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

	?> 