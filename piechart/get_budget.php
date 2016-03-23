 <?php
	require "../init.php";
	
	$Email = $_GET["Email"];
	
	
		$budget["Entertainment"] = $row[1];
		$budget["Electronics"] = $row[0];
		$budget["Fashion"] = $row[2];
		$budget["Other"] = $row[4];
	
	$budget = array();
	
	$sql1 = "SELECT SUM(`ItemPrice`) FROM `Purchases` WHERE `Buyer` = '$Email' AND `ItemCategory` = 'Food';";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		$budget["Food"] = $row[0];
	}
	
	
	
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		
		echo $result;
	}
	else
	{
		//echo "The email and password you entered don't match.";
	}
	
	echo json_encode($budget);
?>