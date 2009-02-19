<?php
class Contactus extends MY_Controller 
{
	function index()
	{
		$data = array();
		$data["title"] = "Funworldlife - צור קשר";
		$this->load->view("contactus_view", $data);
	}
}

?>