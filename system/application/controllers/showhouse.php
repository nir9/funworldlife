<?php
require "Funworldlife.php";

class Showhouse extends Funworldlife 
{
	function Showhouse()
	{
		parent::Funworldlife();
		$this->set_must_be_connected(true);
	}
	
	function show($str_user_id)
	{
		if (!is_numeric($str_user_id)) {
			parent::show_message("שגיאה", "יש לכתוב מספר משתמש. התקבל $str_user_id");
			return;			
		}
		$user_id = (int)($str_user_id);
		
		$this->load->model('Houses');
		$house = $this->Houses->get_house_for_user_id($user_id);
		if ($house == NULL) {
			parent::show_message("שגיאה", ".לא נמצא בית למשתמש");
			return;
		}
		
		$this->load->library('Products', array('id' => $user_id));
		
		$products_amount = $this->products->get_products();	
			
		if (sizeof($products_amount) > 0) {
			$data["has_products"] = true;
			$this->load->model('ProductsModel', '', TRUE);
			
			$products_info = $this->ProductsModel->get_products_info($products_amount);	
			
			$data['products_amount'] = $products_amount;
			$data['products_info'] = $products_info;
		
/*
			// Check if the owner is also the current user
			$this->load->library("session");
			$user_id = $this->session->userdata('userid');	
			$data['owned_by_current_user'] = ($owner == $user_id);
*/
			
			$data["products_images_path"] = base_url() . "images/products";
		}
		else {
			$data["has_products"] = false;
		}
	
		$data["title"] = "House";	
		$this->display_view("showhouse_view", $data);
	}
}
?>