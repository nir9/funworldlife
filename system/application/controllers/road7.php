<?php
require "Funworldlife.php";

class Road7 extends Funworldlife {
	function index()
	{
		global $map;
		global $map_file;
		parent::show_map('Funworldlife - רחוב שביעי', $map, $map_file, "road7");
	}
}

$map_file = array (
	"file" => "Road_7.png",
	"width" => 945,
	"height" => 568
);

$map = array(
	
	
		
	array( 
		"id" =>  "arrow_left", 
		"href" => "road6", 
		"title" => "לרחוב הקודם",
		"left" => 0, 
		"top" => 191, 
		"width" => 89, 
		"height" => 63
	),	
	
	array( 
		"id" =>  "arrow_right", 
		"href" => "road8", 
		"title" => "לרחוב הבא",
		"left" => 846, 
		"top" => 194, 
		"width" => 91, 
		"height" => 55
	),	

);

?>
