<?php
	require "../init.php";
	
	$Email = $_GET["Email"];
	$Food = $_GET["Food"];
	$Entertainment = $_GET["Entertainment"];
	$Electronics = $_GET["Electronics"];
	$Fashion = $_GET["Fashion"];
	$Other = $_GET["Other"];
	
	$sql = "INSERT INTO Budget(Email, Food, Entertainment, Electronics, Fashion, Other) VALUES('$Email', '$Food', '$Entertainment', '$Electronics', '$Fashion', '$Other');";
	
	if(mysqli_query($conn, $sql))
	{
		echo "Budget set";
	}
	else
	{
		echo mysqli_error($conn);
	}
?>