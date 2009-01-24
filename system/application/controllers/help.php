<?php
class Help extends MY_Controller 
{
	function index()
	{
		$data = array();
		$data["title"] = "Help | עזרה";
		$this->load->view("help_view", $data);
	}
}

?>