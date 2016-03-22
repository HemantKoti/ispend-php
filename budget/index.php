<?php
	require "../init.php";
	
	$Email = $_GET["Email"];
	$Food = $_GET["Food"];
	$Entertainment = $_GET["Entertainment"];
	$Electronics = $_GET["Electronics"];
	$Fashion = $_GET["Fashion"];
	$Other = $_GET["Other"];
	$Total = $_GET["Total"];
	
	$sql = "INSERT INTO `ispend`.`Budget` (`Email`, `Food`, `Entertainment`, `Electronics`, `Fashion`, `Other`, `Total`) VALUES ('$Email', '$Food', '$Entertainment', '$Electronics', '$Fashion', '$Other', '$Total');";
	
	if(mysqli_query($conn, $sql))
	{
		echo "Budget set";
	}
	else
	{
		echo mysqli_error($conn);
	}
?>