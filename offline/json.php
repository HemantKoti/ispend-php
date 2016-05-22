<?php
	$post_data = array(
  'purchase' => array(
    'item_name' => "Moto G",
    'item_category' => "Electronics",
    'item_price' => "14000"
  )
);
	
	echo json_encode($post_data);
?>