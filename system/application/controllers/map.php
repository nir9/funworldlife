<?php
require "Funworldlife.php";

class Map extends Funworldlife {
	function index()
	{
		global $map;
		global $map_file;
		parent::show_map('Funworldlife - מפת העולם של האתר', $map, $map_file);
	}
}

$map_file = array (
	"file" => "FunworldlifeWorld.png",
	"width" => 945,
	"height" => 700
);

$map = array(
	
);

?>
