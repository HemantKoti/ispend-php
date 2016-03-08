<?php
	require "../init.php";
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$mobile = $_POST["mobile"];
	
	$sql = "INSERT INTO Users(Name, Email, Mobile, Password) VALUES('$name', '$email', '$mobile', '$password');";
	
	if(mysqli_query($conn, $sql))
	{
		echo "Registration Successfull";
	}
	else
	{
		echo mysqli_error($conn);
	}
?>