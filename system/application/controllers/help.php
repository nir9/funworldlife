<?php
class Help extends MY_Controller 
{
	function index()
	{
		$data = array();
		$data["title"] = "Funworldlife - עזרה";
		$this->load->view("help_view", $data);
	}
}

?>