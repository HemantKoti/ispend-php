<?php
	require "../init.php";
	
	$Email = $_POST["Email"];
	$Food = $_POST["Food"];
	$Entertainment = $_POST["Entertainment"];
	$Electronics = $_POST["Electronics"];
	$Fashion = $_POST["Fashion"];
	$Other = $_POST["Other"];
	$Total = $_POST["Total"];
	
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