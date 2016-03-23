 <?php
	require "../init.php";
	
	$Email = $_GET["Email"];
	
	$budget = array();
	
	$sql1 = "SELECT SUM(`ItemPrice`) AS Food FROM `Purchases` WHERE `Buyer` = '$Email' AND `ItemCategory` = 'Food';";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		$budget["Food"] = $row["Food"];
	}
	
	echo json_encode($budget);
?>