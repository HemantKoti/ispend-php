<?php
	require "../../init.php";
	
	$Email = $_GET["Email"];
	$Food = $_GET["Food"];
	$Entertainment = $_GET["Entertainment"];
	$Electronics = $_GET["Electronics"];
	$Fashion = $_GET["Fashion"];
	$Other = $_GET["Other"];
	$Total = $_GET["Total"];
	
	$sql = "SELECT * FROM Users WHERE Email = '$Email';";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result) > 0)
	{
		$sql1 = "UPDATE `ispend`.`Budget` SET `Food` = '$Food', `Entertainment` = '$Entertainment', `Electronics` = '$Electronics', `Fashion` = '$Fashion', `Other` = '$Other', `Total` = '$Total' WHERE `Email` = '$Email';";
	
		if(mysqli_query($conn, $sql1))
		{
			echo "Budget set";
		}
		else
		{
			echo mysqli_error($conn);
		}
	}
	else
	{
		$sql2 = "INSERT INTO `ispend`.`Budget`(`Email`, `Food`, `Entertainment`, `Electronics`, `Fashion`, `Other`, `Total`) VALUES('$Email', '$Food', '$Entertainment', '$Electronics', '$Fashion', '$Other', '$Total');";
	
		if(mysqli_query($conn, $sql2))
		{
			echo "Budget set";
		}
		else
		{
			echo mysqli_error($conn);
		}
	}
?>