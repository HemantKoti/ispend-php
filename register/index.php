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
		
		$sql1 = "INSERT INTO `ispend`.`Purchases` (`PurchaseID`, `Buyer`, `ItemName`, `ItemPrice`, `ItemCategory`) VALUES (NULL, '$Email', NULL, '0', 'Electronics');";
		mysqli_query($conn, $sql1);
		
		$sql2 = "INSERT INTO `ispend`.`Purchases` (`PurchaseID`, `Buyer`, `ItemName`, `ItemPrice`, `ItemCategory`) VALUES (NULL, '$Email', NULL, '0', 'Entertainment');";
		mysqli_query($conn, $sql2);
		
		$sql3 = "INSERT INTO `ispend`.`Purchases` (`PurchaseID`, `Buyer`, `ItemName`, `ItemPrice`, `ItemCategory`) VALUES (NULL, '$Email', NULL, '0', 'Fashion');";
		mysqli_query($conn, $sql3);
		
		$sql4 = "INSERT INTO `ispend`.`Purchases` (`PurchaseID`, `Buyer`, `ItemName`, `ItemPrice`, `ItemCategory`) VALUES (NULL, '$Email', NULL, '0', 'Food');";
		mysqli_query($conn, $sql4);
		
		$sql5 = "INSERT INTO `ispend`.`Purchases` (`PurchaseID`, `Buyer`, `ItemName`, `ItemPrice`, `ItemCategory`) VALUES (NULL, '$Email', NULL, '0', 'Other');";
		mysqli_query($conn, $sql5);
	}
	else
	{
		echo mysqli_error($conn);
	}
?>