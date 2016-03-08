 <?php
	require "../init.php";
	
	$email = $_POST["email"];
	$password = $_POST["password"];
	
	$sql = "SELECT * FROM Users WHERE Email = '$email' AND Password = '$password';";
	
	$result = mysqli_query($conn, $sql);
	
	$user = array();
	
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		$user["name"] = $row["Name"];
		$user["email"] = $row["Email"];
		$user["mobile"] = $row["Mobile"];
		$user["password"] = $row["Password"];
	}
	else
	{
		//echo "Not Found!";
	}
	
	echo json_encode($user);
?>