 <?php
	require "../init.php";
	
	$Email = $_GET["Email"];
	
	$sql = "SELECT * FROM Purchases WHERE Buyer = '$Email'";
	
	$result = mysqli_query($conn, $sql);
	
	$response = array();
	
	while($row = mysqli_fetch_array($result))
	{
		array_push($response, array("ItemName"=>$row[2], "ItemPrice"=>$row[3], "ItemCategory"=>$row[4]));
	}
	
	echo json_encode(array("server_response"=>$response));
	
	mysqli_close($conn);
?>