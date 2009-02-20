<?php
require "Funworldlife.php";

class Safety extends Funworldlife 
{
	function index()
	{
		$data = array();
		$data["title"] = "Funworldlife - בתיחות באינטרנט";
		$this->display_view("safety_view", $data);
	}
}
?>