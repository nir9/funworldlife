<?php
require "Funworldlife.php";

class Road5 extends Funworldlife {
	function index()
	{
		global $map;
		global $map_file;
		parent::show_map('Funworldlife - רחוב חמישי', $map, $map_file, "road5");
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
		"title" => "בית בחירת עבודות ",
		"left" => 209, 
		"top" => 59, 
		"width" => 533, 
		"height" => 514 
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

);

?>
