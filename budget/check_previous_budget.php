 <?php
	require "../init.php";
	
	$Email = $_GET["Email"];
	
	$sql = "SELECT * FROM Budget WHERE Email = '$Email';";
	
	$result = mysqli_query($conn, $sql);
	
	$Budget = array();
	
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		
		$Budget["Email"] = $row["Email"];
		$Budget["Food"] = $row["Food"];
		$Budget["Entertainment"] = $row["Entertainment"];
		$Budget["Electronics"] = $row["Electronics"];
		$Budget["Fashion"] = $row["Fashion"];
		$Budget["Other"] = $row["Other"];
	}
	else
	{
		//echo "The email and password you entered don't match.";
	}
	
	echo json_encode($Budget);
?>