<?php
	$conn = mysqli_connect('localhost', 'root', '', 'contact');
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$sql = "INSERT INTO contact	VALUES (NULL,'$name','$email','$message')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>