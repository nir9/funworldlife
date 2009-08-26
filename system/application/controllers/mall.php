<?php
require "Funworldlife.php";

class Mall extends Funworldlife {
	function index()
	{
		global $map;
		global $map_file;
		$this->set_must_be_connected(true);
		parent::show_map('Funworldlife - קניון', $map, $map_file);
	}
}

$map_file = array (
	"file" => "Funworldlife_Mall.png",
	"width" => 945,
	"height" => 568
);

$map = array(
	
	array( 
		"id" =>  "shop_food", 
		"href" => "shops/shop/food", 
		"title" => "מזונה - חנות מזון",
		"left" => 5, 
		"top" => 42, 
		"width" => 169, 
		"height" => 221 
	),
	
	array( 
		"id" =>  "shop_fre", 
		"href" => "shops/shop/fre", 
		"title" => "פאן רהיטים - חנות רהיטים",
		"left" => 358, 
		"top" => 33, 
		"width" => 207,
		"height" => 228 
	),
	
		array( 
		"id" =>  "shop_sovi", 
		"href" => "shops/shop/sovi", 
		"title" => "מזקרותיה - חנות מזקרות",
		"left" => 656, 
		"top" => 37, 
		"width" => 209,
		"height" => 228 
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
