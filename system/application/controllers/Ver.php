<?php
require "Funworldlife.php";

class Ver extends Funworldlife 
{
	function index()
	{
		$data = array();
		$data["title"] = "Funworldlife -  Versions";
		$this->display_view("Ver_view", $data);
	}
}
?>