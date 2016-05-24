<?php
	require "../../init.php";
	
	$Email = $_POST["Email"];
	$Food = $_POST["Food"];
	$Entertainment = $_POST["Entertainment"];
	$Electronics = $_POST["Electronics"];
	$Fashion = $_POST["Fashion"];
	$Other = $_POST["Other"];
	$Total = $_POST["Total"];
	
	$sql = "SELECT * FROM Budget WHERE Email = '$Email';";
	
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