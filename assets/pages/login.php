<?php 
include "config.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$pass = validate($_POST['password']);

	$sql = "SELECT * FROM admin WHERE UserName ='$username' AND Password='$pass'";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) === 1) {
		$row = mysqli_fetch_assoc($result);
		header("Location: Clients.php");
		exit() ; 
	}else{
		header("Location: ../../index.php?error=Password or Username incorrect");
		exit();
	}
	
}else{
	header("Location: ../../index.php?error=Password or Username incorrect");
	exit();
}

?>