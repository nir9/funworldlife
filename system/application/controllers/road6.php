<?php
require "Funworldlife.php";

class Road6 extends Funworldlife {
	function index()
	{
		global $map;
		global $map_file;
		parent::show_map('Funworldlife - רחוב שישי', $map, $map_file, "road6");
	}
}

$map_file = array (
	"file" => "Road_6.png",
	"width" => 945,
	"height" => 568
);

$map = array(
	
	
	array( 
		"id" =>  "Apartments", 
		"href" => "apartments2", 
		"title" => "דירות",
		"left" => 835, 
		"top" => 255, 
		"width" => 107, 
		"height" => 313 
	),
		
	array( 
		"id" =>  "arrow_left", 
		"href" => "road5", 
		"title" => "לרחוב הקודם",
		"left" => 0, 
		"top" => 191, 
		"width" => 89, 
		"height" => 63
	),	
	
	array( 
		"id" =>  "arrow_right", 
		"href" => "road7", 
		"title" => "לרחוב הבא",
		"left" => 851, 
		"top" => 86, 
		"width" => 91, 
		"height" => 55
	),	

);

?>
