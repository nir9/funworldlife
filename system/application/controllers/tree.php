<?php
require "Funworldlife.php";
class TreeComingSoon extends Funworldlife {
	function index()
	{
		global $map;
		global $map_file;]
		$this->set_must_be_connected(true);
		parent::show_map('Funworldlife - טיפוס על העץ', $map, $map_file);
	}
}

$map_file = array (
	"file" => "Tree_Coming_Soon.png",
	"width" => 945,
	"height" => 568
);

$map = array(
	array( 
		"id" =>  "guard", 
		"href" => "guard", 
		"title" => "שומר",
		"left" => 740, 
		"top" => 344, 
		"width" => 200, 
		"height" => 224 
	),
	
	array( 
		"id" =>  "bank", 
		"href" => "bank", 
		"title" => "בנק",
		"left" => 339, 
		"top" => 386, 
		"width" => 162, 
		"height" => 182 
	),
	
	array( 
		"id" =>  "shop_food", 
		"href" => "shop_food", 
		"title" => "מזונה - חנות מזון",
		"left" => 5, 
		"top" => 42, 
		"width" => 169, 
		"height" => 221 
	),
	
	array( 
		"id" =>  "shop_electric", 
		"href" => "shop_electric", 
		"title" => "אלקטריק - חנות אלקטרוניקה",
		"left" => 332, 
		"top" => 42, 
		"width" => 205, 
		"height" => 219 
	),
	
	array( 
		"id" =>  "shop_pets", 
		"href" => "shop_pets", 
		"title" => "חיות - חנות חיות",
		"left" => 671, 
		"top" => 61, 
		"width" => 153, 
		"height" => 200 
	),	
	
		array( 
		"id" =>  "back", 
		"href" => "welcome", 
		"title" => "חזרה לרחוב",
		"left" => 11, 
		"top" => 279, 
		"width" => 97, 
		"height" => 57 
	),
);

?>
