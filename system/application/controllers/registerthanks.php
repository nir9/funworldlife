<?php
class Registerthanks extends Controller 
{
	function index()
	{
		$data = array();
		$data["title"] = "Thanks | תודה";
		$this->load->view("registerthanks_view", $data);
	}
}

?>