<?php
require "Funworldlife.php";

class Buyproduct extends Funworldlife 
{	
	function submit()
	{
		$this->load->helper('form');
		
		if (!$this->is_user_connected()) {
			return redirect('/login');
		}

		// Get user id
		$user_id = $this->session->userdata('user_id');		
		
		$product_id = $this->input->post('product_id');	
		$amount = $this->input->post('amount');

		$this->load->model('ProductsModel', '', TRUE);
		$price = $this->ProductsModel->get_product_price($product_id);
		if ($price < 0) {
			parent::show_message(
				"אין כזה מוצר",
				"אין כזה מוצר"
			);
			return;
		}
		$buy_price = $amount * $price;

		// Get money and change money
		$has_enough_money = parent::take_money($price);
		if (!$has_enough_money) {
			parent::show_message(
				"אין מספיק כסף",
				"אין מספיק כסף! צריך לפחות $buy_price"
			);
			return;
		}
		
		$this->load->library('Products', array('id' => $user_id));
		$result = $this->products->add_product((int)$product_id, (int)$amount);
		if (!$result) {
			parent::show_message(
				"אין אפשרות להוסיף עוד מוצרים",
				"אין אפשרות להוסיף עוד מוצרים"
			);
			return;
		}
		
		redirect("/shops");
	}
	
}
?>