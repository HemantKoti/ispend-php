<?php
	require "../init.php";
	
	$postdata = file_get_contents("php://input"); 
	$data = json_decode($postdata, true);

	if (is_array($data['upload_fishes'])) {
	  foreach ($data['upload_fishes'] as $record) {
		$fid = $record['fish_id'];
		$flat = $record['fish_lat'];
		$flon = $record['fish_lon'];
		
		$sql1 = "INSERT INTO  `ispend`.`fishes` (`fish_type_id` ,`fish_lat` ,`fish_lon`) VALUES (NULL,  '$flat',  '$flon');";
		mysqli_query($conn, $sql1);
		
		if(mysqli_query($mysqli,"")) {
			echo "yes";
		}
		else {
			echo "no";
		}
	  }
   }
?>