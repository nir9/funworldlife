<?php
require "Funworldlife.php";
class apartments extends Funworldlife {
	function index()
	{
		global $map;
		global $map_file;
		$this->set_must_be_connected(true);
		parent::show_map('Funworldlife - דירות', $map, $map_file);
	}
}

$map_file = array (
	"file" => "apartments.png",
	"width" => 945,
	"height" => 568
);

$map = array(
	array( 
		"id" =>  "back", 
		"href" => "road2", 
		"title" => "חזרה לרחוב | Back To The Road",
		"left" => 0, 
		"top" => 0, 
		"width" => 106, 
		"height" => 75 
	),
	
	array( 
		"id" =>  "buyapartment", 
		"href" => "buyapartment", 
		"title" => "השכרת דירה | Rent A Apartment",
		"left" => 143, 
		"top" => 78, 
		"width" => 115, 
		"height" => 64 
	),
	
	array( 
		"id" =>  "apartments", 
		"href" => "apartments", 
		"title" => "דירות | Apartments",
		"left" => 500, 
		"top" => 0, 
		"width" => 226, 
		"height" => 188 
	),
);

?>
