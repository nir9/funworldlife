<?php
require "Funworldlife.php";

class Road5 extends Funworldlife {
	function index()
	{
		global $map;
		global $map_file;
		parent::show_map('Road 5 | רחוב חמישי', $map, $map_file);
	}
}

$map_file = array (
	"file" => "Road_5.png",
	"width" => 945,
	"height" => 568
);

$map = array(
	
	
	array( 
		"id" =>  "PikeWork", 
		"href" => "PikeWork", 
		"title" => "בית בחירת עבודות | The Place Theat You Pike Your Self A Work",
		"left" => 209, 
		"top" => 59, 
		"width" => 533, 
		"height" => 514 
	),
	
	array( 
		"id" =>  "Buyhouse", 
		"href" => "Buyhouse", 
		"title" => "לחץ כאן כדי לקנות בית | Click Here To Buy An House",
		"left" => 754, 
		"top" => 474,
		"width" => 182, 
		"height" => 94 
	),
	
		
	array( 
		"id" =>  "arrow_left", 
		"href" => "road4", 
		"title" => "לרחוב הקודם",
		"left" => 0, 
		"top" => 191, 
		"width" => 89, 
		"height" => 63
	),	
	
	array( 
		"id" =>  "arrow_right", 
		"href" => "road6", 
		"title" => "לרחוב הבא",
		"left" => 853, 
		"top" => 204, 
		"width" => 79, 
		"height" => 51
	),	
	
	array( 
		"id" =>  "Buyhouse2", 
		"href" => "Buyhouse", 
		"title" => "לחץ כאן כדי לקנות בית | Click Here To Buy An House",
		"left" => 11, 
		"top" => 471,
		"width" => 182, 
		"height" => 97 
	),
);

?>
