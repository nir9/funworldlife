<?php
require "Funworldlife.php";

class Welcome extends Funworldlife {
	function index()
	{
		global $map;
		global $map_file;
		parent::show_map('Funworldlife - ברוכים הבאים', $map, $map_file);
	}
}

$map_file = array (
	"file" => "Funworldlife_allgrame_n.png",
	"width" => 942,
	"height" => 568
);

$map = array(
	/*array( 
		"id" =>  "tree", 
		"href" => "tree", 
		"title" => "טיפוס על עץ",
		"left" => 620, 
		"top" => 193, 
		"width" => 75, 
		"height" => 375 
	),
	array( 
		"id" =>  "school", 
		"href" => "school", 
		"title" => "בית הספר",
		"left" => 696, 
		"top" => 404, 
		"width" => 191, 
		"height" => 164 
	),	
	array( 
		"id" =>  "arrow_right", 
		"href" => "road2", 
		"title" => "לרחוב הבא",
		"left" => 853, 
		"top" => 204, 
		"width" => 79, 
		"height" => 51
	),	
	array( 
		"id" =>  "mall", 
		"href" => "mall", 
		"title" => "קניון העיר",
		"left" => 354, 
		"top" => 73, 
		"width" => 258, 
		"height" => 495
	),	
	/*array( 
		"id" =>  "tree2", 
		"href" => "tree", 
		"title" => "טיפוס על העץ",
		"left" => 235, 
		"top" => 403, 
		"width" => 101, 
		"height" => 165
	),
		array( 
		"id" =>  "postoffice", 
		"href" => "postoffice", 
		"title" => "דואר העיר",
		"left" => 109, 
		"top" => 414, 
		"width" => 105, 
		"height" => 154
	),
	array( 
		"id" =>  "tree3", 
		"href" => "tree", 
		"title" => "טיפוס על העץ",
		"left" => 0, 
		"top" => 400, 
		"width" => 104, 
		"height" => 168
	),*/
	array( 
		"id" =>  "FwalamaiMall", 
		"href" => "mall", 
		"title" => "קניון פאולאמהי",
		"left" => 25, 
		"top" => 68, 
		"width" => 244, 
		"height" => 500
		
		),
	/*
	array( 
		"id" =>  "FwalamaiInternatinolAirPort", 
		"href" => "FWLAirport", 
		"title" => "שדה התעופה הבינלאומי של פאולמאהי",
		"left" => 737, 
		"top" => 287, 
		"width" => 205, 
		"height" => 28 
	),
	*/
	
		array( 
		"id" =>  "Road2", 
		"href" => "road2", 
		"title" => "לרחוב הבא",
		"left" =>	848, 
		"top" => 224, 
		"width" => 71, 
		"height" => 44
	),
	
);

?>
