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
		"id" => "shop_fre",
		"href" => "shops/shop/fre",
		"title" => "פאן רהיטים - חנות רהיטים",
		"left" => 356, 
		"top" => 33, 
		"width" => 211,
		"height" => 227 
		
	),
	
	
	array(
		"id" => "shop_sovi",
		"href" => "shops/shop/sovi",
		"title" => "מזקרותיה - חנות מזקרות",
		"left" => 665, 
		"top" => 39, 
		"width" => 211,
		"height" => 220 
		
	),
	
	
	
	
	array(
		"id" => "shop_elec",
		"href" => "shops/shop/elec",
		"title" => "אלאקטריק - חנות אלקטרוניקה",
		"left" => 669, 
		"top" => 350, 
		"width" => 212,
		"height" => 218 
		
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
