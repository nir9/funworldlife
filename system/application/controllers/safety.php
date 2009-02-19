<?php
require "Funworldlife.php";

class Safety extends Funworldlife 
{
	function index()
	{
		$data = array();
		$data["title"] = "Funworldlife - בתיחות באינטרנט";
		$this->load->view("safety_view", $data);
	}
}
?>