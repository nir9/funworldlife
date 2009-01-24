<?php
class Contactus extends MY_Controller 
{
	function index()
	{
		$data = array();
		$data["title"] = "Contact us | צור קשר";
		$this->load->view("contactus_view", $data);
	}
}

?>