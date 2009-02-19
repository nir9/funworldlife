<?php
require "Funworldlife.php";

class Road4 extends Funworldlife {
	function index()
	{
		global $map;
		global $map_file;
		parent::show_map('Funworldlife - רחוב רביעי', $map, $map_file);
	}
}

$map_file = array (
	"file" => "Road_4.png",
	"width" => 945,
	"height" => 568
);

$map = array(

	
	array( 
		"id" =>  "DigHere", 
		"href" => "DigHere1", 
		"title" => "חפר כאן | Dig Here",
		"left" => 624, 
		"top" => 482,
		"width" => 86, 
		"height" => 71 
	),
	
		
	array( 
		"id" =>  "arrow_left", 
		"href" => "road3", 
		"title" => "לרחוב הקודם",
		"left" => 0, 
		"top" => 191, 
		"width" => 89, 
		"height" => 63
	),	
	
		array( 
		"id" =>  "ClickFun-Desert", 
		"href" => "Desert", 
		"title" => "לחץ כאן כדי ללחת למדבר | Click Here To Go In The Fun-Desert",
		"left" => 336, 
		"top" => 351,
		"width" => 189,
		"height" => 169 
	),
	

	array( 
		"id" =>  "arrow_right", 
		"href" => "road5", 
		"title" => "לרחוב הבא",
		"left" => 853, 
		"top" => 204, 
		"width" => 79, 
		"height" => 51
	),	
	
);

?>
