<?php
class English extends MY_Controller 
{
	function index()
	{
		$data = array();
		$data["title"] = "Funworldlife - English";
		$this->load->view("english_view", $data);
	}
}

?>