<?php
require "Funworldlife.php";

class Road8 extends Funworldlife {
	function index()
	{
		global $map;
		global $map_file;
		parent::show_map('Funworldlife - רחוב שמיני', $map, $map_file, "road8");
	}
}

$map_file = array (
	"file" => "Road_8.png",
	"width" => 945,
	"height" => 568
);

$map = array(
	
	
		
	array( 
		"id" =>  "arrow_left", 
		"href" => "road7", 
		"title" => "לרחוב הקודם",
		"left" => 0, 
		"top" => 199, 
		"width" => 89, 
		"height" => 63
	),	
	
	array( 
		"id" =>  "arrow_right", 
		"href" => "road9", 
		"title" => "לרחוב הבא",
		"left" => 846, 
		"top" => 194, 
		"width" => 91, 
		"height" => 55
	),	

);

?>
