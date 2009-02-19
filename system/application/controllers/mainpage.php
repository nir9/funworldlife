<?php
require "Funworldlife.php";

class Mainpage extends Funworldlife 
{
	function index()
	{
		$data = array();
		$data["title"] = "Funworldlife - הדף הראשי";
		$this->load->view("mainpage_view", $data);
	}
}
?>