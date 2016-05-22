<?php
	require "../init.php";
	
	$sql = $_GET["query"];
	
	$postdata = file_get_contents("php://input"); 
	$data = json_decode($postdata, true);

	if (is_array($data['upload_fishes'])) {
	  foreach ($data['upload_fishes'] as $record) {
		$fid = $record['fish_id'];
		$flat = $record['fish_lat'];
		$flon = $record['fish_lon'];

		mysqli_query($mysqli,"INSERT INTO `fishes`(`fish_type_id`, `fish_lat`, `fish_lon`) VALUES ($fid, $flat, $flon)");
	  }
   }
?>