<?php
class Registerthanks extends MY_Controller 
{
	function index()
	{
		$data = array();
		$data["title"] = "Thanks | תודה";
		$this->load->view("registerthanks_view", $data);
	}
}

?>