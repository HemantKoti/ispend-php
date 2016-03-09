<?php
	require "../init.php";
	
	$Email = $_POST["Email"];
	$Mobile = $_POST["Mobile"];
	$AccountNumber = $_POST["AccountNumber"];
	$Name = $_POST["Name"];
	$Password = $_POST["Password"];
	
	$sql = "INSERT INTO Users(Email, Mobile, AccountNumber, Name, Password) VALUES('$Email', '$Mobile', '$AccountNumber', '$Name', '$Password');";
	
	if(mysqli_query($conn, $sql))
	{
		echo "Registration Successfull";
	}
	else
	{
		echo mysqli_error($conn);
	}
?>