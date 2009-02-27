<?php
require "Funworldlife.php";

class Pikework extends Funworldlife {
	function index()
	{
		global $map;
		global $map_file;
		$this->set_must_be_connected(true);
		parent::show_map('Funworldlife - בית בחירת עבודה', $map, $map_file);
	}
}

$map_file = array (
	"file" => "PickWork.png",
	"width" => 945,
	"height" => 568
);

$map = array(
	array( 
		"id" =>  "cleanstreet", 
		"href" => "cleanstreet", 
		"title" => "ניקוי רחובות",
		"left" => 757, 
		"top" => 396, 
		"width" => 152, 
		"height" => 172 
	),
	
	array( 
		"id" =>  "garden" ,
		"href" => "garden", 
		"title" => "לשתול גן ירק",
		"left" => 538, 
		"top" => 391, 
		"width" => 168, 
		"height" => 177 
	),
	
	array( 
		"id" =>  "cristal", 
		"href" => "cristal", 
		"title" => "לחפש קריסטל",
		"left" => 336, 
		"top" => 390, 
		"width" => 176, 
		"height" => 178 
	),
	
	array( 
		"id" =>  "back", 
		"href" => "road5", 
		"title" => "חזרה לרחוב",
		"left" => 0, 
		"top" => 476, 
		"width" => 115, 
		"height" => 92 
	),
);

?>
