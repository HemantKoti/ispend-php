 <?php
	require "../init.php";
	
	$Email = $_GET["Email"];
	
	$sql = "SELECT `ItemCategory`, SUM(`ItemPrice`) FROM `Purchases` WHERE `Buyer` = '$Email' GROUP BY `ItemCategory`;";
	
	$result = mysqli_query($conn, $sql);
	
	$budget = array();
	
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