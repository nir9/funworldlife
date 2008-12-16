<?php
require "Funworldlife.php";

class Road2 extends Funworldlife {
	function index()
	{
		global $map;
		global $map_file;
		parent::show_map('Road2', $map, $map_file);
	}
}

$map_file = array (
	"file" => "Funworldlife_Mall.png",
	"width" => 945,
	"height" => 568
);

$map = array(
	array( 
		"id" =>  "guard", 
		"href" => "guard.php", 
		"title" => "שומר",
		"left" => 740, 
		"top" => 344, 
		"width" => 200, 
		"height" => 224 
	),
	
	array( 
		"id" =>  "bank", 
		"href" => "bank.php", 
		"title" => "בנק",
		"left" => 339, 
		"top" => 386, 
		"width" => 162, 
		"height" => 182 
	),
	
	array( 
		"id" =>  "shop_food", 
		"href" => "shop_food.php", 
		"title" => "מזונה - חנות מזון",
		"left" => 5, 
		"top" => 42, 
		"width" => 169, 
		"height" => 221 
	),
	
	array( 
		"id" =>  "shop_electric", 
		"href" => "shop_electric.php", 
		"title" => "אלקטריק - חנות אלקטרוניקה",
		"left" => 332, 
		"top" => 42, 
		"width" => 205, 
		"height" => 219 
	),
	
	array( 
		"id" =>  "shop_pets", 
		"href" => "shop_pets.php", 
		"title" => "חיות - חנות חיות",
		"left" => 671, 
		"top" => 61, 
		"width" => 153, 
		"height" => 200 
	),	
);

?>
