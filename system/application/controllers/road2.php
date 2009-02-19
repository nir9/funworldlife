<?php
require "Funworldlife.php";

class Road2 extends Funworldlife {
	function index()
	{
		global $map;
		global $map_file;
		parent::show_map('Funworldlife - רחוב שני', $map, $map_file);
	}
}

$map_file = array (
	"file" => "Funworldlife_Road2.png",
	"width" => 945,
	"height" => 568
);

$map = array(
	array( 
		"id" =>  "Buttletunnle", 
		"href" => "battletunnle", 
		"title" => "בית המלחמות | Battletunnle",
		"left" => 608, 
		"top" => 92,
		"width" => 241, 
		"height" => 470 
	),
	
	array( 
		"id" =>  "buyhouse", 
		"href" => "buyhouse", 
		"title" => "Click Her To Bulid A House | לחץ כאן כדי לבנות בית",
		"left" => 418, 
		"top" => 461, 
		"width" => 183, 
		"height" => 107 
	),
	
	array( 
		"id" =>  "buyhouse2", 
		"href" => "buyhouse", 
		"title" => "Click Her To Bulid A House | לחץ כאן כדי לבנות בית",
		"left" => 227, 
		"top" => 461, 
		"width" => 183, 
		"height" => 107 
	),
	
	array( 
		"id" =>  "apartments", 
		"href" => "apartments", 
		"title" => "דירות | apartments",
		"left" => 0, 
		"top" => 251, 
		"width" => 106, 
		"height" => 317 
	),
	
		
	array( 
		"id" =>  "arrow_left", 
		"href" => "welcome", 
		"title" => "לרחוב הקודם",
		"left" => 0, 
		"top" => 127, 
		"width" => 86, 
		"height" => 54
	),	
	
		array( 
		"id" =>  "arrow_right", 
		"href" => "road3", 
		"title" => "לרחוב הבא",
		"left" => 853, 
		"top" => 204, 
		"width" => 86, 
		"height" => 41
	),	
);

?>
