<?php
	require "../init.php";
	
	$Buyer = $_GET["Buyer"];
	$ItemName = $_GET["ItemName"];
	$ItemPrice = $_GET["ItemPrice"];
	$ItemCategory = $_GET["ItemCategory"];
	
	$sql = "INSERT INTO `ispend`.`Purchases` (`PurchaseID`, `Buyer`, `ItemName`, `ItemPrice`, `ItemCategory`) VALUES (NULL, '$Buyer', '$ItemName', '$ItemPrice', '$ItemCategory');";
	
	if(mysqli_query($conn, $sql))
	{
		echo "Purchased!";
	}
	else
	{
		echo mysqli_error($conn);
	}
?>