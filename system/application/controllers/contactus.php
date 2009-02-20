<?php
class Contactus extends MY_Controller 
{
	function index()
	{
		$data = array();
		$data["title"] = "Funworldlife - צור קשר";
		$this->display_view("contactus_view", $data);
	}
}

?>