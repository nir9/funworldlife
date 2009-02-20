<?php
class Help extends MY_Controller 
{
	function index()
	{
		$data = array();
		$data["title"] = "Funworldlife - עזרה";
		$this->display_view("help_view", $data);
	}
}

?>