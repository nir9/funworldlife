<?php
require "Funworldlife.php";

class Battletunnle extends Funworldlife {
	function index()
	{
		global $map;
		global $map_file;
		$this->set_must_be_connected(true);
		parent::show_map('Funworldlife - בית המלחמות', $map, $map_file);
	}
}

$map_file = array (
	"file" => "Battletunnle.png",
	"width" => 945,
	"height" => 568
);

$map = array(
	array( 
		"id" =>  "WEPShop", 
		"href" => "wepshop", 
		"title" => "חנות כלי נשק",
		"left" => 139, 
		"top" => 316, 
		"width" => 614, 
		"height" => 252 
	),
	
	array( 
		"id" =>  "inbattle" ,
		"href" => "battle", 
		"title" => "לחץ כאן כדי להיכנס למלחמה",
		"left" => 78, 
		"top" => 0, 
		"width" => 124, 
		"height" => 271 
	),
	
	array( 
		"id" =>  "imon", 
		"href" => "battletrain", 
		"title" => "לעמן את דמות שלך | Train",
		"left" => 640, 
		"top" => 0, 
		"width" => 103, 
		"height" => 269 
	),
	
	array( 
		"id" =>  "back", 
		"href" => "road2", 
		"title" => "חזרה לרחוב",
		"left" => 845, 
		"top" => 3, 
		"width" => 96, 
		"height" => 68 
	),
);

?>
