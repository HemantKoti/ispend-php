 <?php
	require "../init.php";
	
	$Email = $_GET["Email"];
	
	$sql = "SELECT `ItemCategory`, SUM(`ItemPrice`) FROM `Purchases` WHERE `Buyer` = '$Email' GROUP BY `ItemCategory`;";
	
	$result = mysqli_query($conn, $sql);
	
	$budget = array();
	
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		
		$budget["Food"] = $row[3];
		$budget["Entertainment"] = $row[1];
		$budget["Electronics"] = $row[0];
		$budget["Fashion"] = $row[2];
		$budget["Other"] = $row[4];
	}
	else
	{
		//echo "The email and password you entered don't match.";
	}
	
	echo json_encode($budget);
?>