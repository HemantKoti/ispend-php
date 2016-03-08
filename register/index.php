<?php
	require "../init.php";
	
	$Email = $_GET["Email"];
	$Mobile = $_GET["Mobile"];
	$AccountNumber = $_GET["AccountNumber"];
	$Name = $_GET["Name"];
	$Password = $_GET["Password"];
	
	$sql = "INSERT INTO Users(Email, Mobile, AccountNumber, Name, Password) VALUES('$Email', '$Mobile', '$AccountNumber', '$Name', '$Password');";
	
	if(mysqli_query($conn, $sql))
	{
		echo "Registration Successfull!";
	}
	else
	{
		echo mysqli_error($conn);
	}
?>