<?php
	$post_data = array(
  'item' => array(
    'item_type_id' => $item_type,
    'string_key' => $string_key,
    'string_value' => $string_value,
    'string_extra' => $string_extra,
    'is_public' => $public,
   'is_public_for_contacts' => $public_contacts
  )
);
	
	echo json_encode($post_data);
?>