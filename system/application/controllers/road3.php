<?php
require "Funworldlife.php";

class Road3 extends Funworldlife {
	function index()
	{
		global $map;
		global $map_file;
		parent::show_map('Third Road | רחוב שלישי', $map, $map_file);
	}
}

$map_file = array (
	"file" => "Funworldlife_Road3.png",
	"width" => 945,
	"height" => 568
);

$map = array(
	array( 
		"id" =>  "Buyhouse3", 
		"href" => "Buyhouse", 
		"title" => "לחץ כאן כדי לקנות בית | Click Here To Buy An House",
		"left" => 36, 
		"top" => 467,
		"width" => 180, 
		"height" => 101 
	),
	
	array( 
		"id" =>  "Museum", 
		"href" => "Museum", 
		"title" => "מוזאון | Museum",
		"left" => 244, 
		"top" => 170, 
		"width" => 416, 
		"height" => 396 
	),
	
	array( 
		"id" =>  "forest", 
		"href" => "forest1", 
		"title" => "לחץ כאן כדי להיכנס ליער | Click Here To Go In The Forest",
		"left" => 663, 
		"top" => 156, 
		"width" => 277, 
		"height" => 412 
	),
	
		
	array( 
		"id" =>  "arrow_left", 
		"href" => "road2", 
		"title" => "לרחוב הקודם",
		"left" => 0, 
		"top" => 191, 
		"width" => 89, 
		"height" => 63
	),	
	
	array( 
		"id" =>  "arrow_right", 
		"href" => "road4", 
		"title" => "לרחוב הבא",
		"left" => 843, 
		"top" => 84, 
		"width" => 98, 
		"height" => 62
	),	
);

?>
