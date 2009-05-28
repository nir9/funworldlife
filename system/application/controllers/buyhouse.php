<?php
require "Funworldlife.php";

class Buyhouse extends Funworldlife
{	
	function buy($str_id)
	{
		$this->load->helper('form');
		
		if (!$this->is_user_connected()) {
			return redirect('/login');
		}
	
		if (!is_numeric($str_id)) {
			return $this->_error("יש לכתוב מספר בית. התקבל $str_id");
		}
		$house_id = (int)($str_id);
			
		$data = array();
		$data["title"] = "קנה בית";
		$data['colors'] = $this->_colorsArray('color');
		$data['house_id'] = $house_id;
		
		$this->display_view('buyhouse_view', $data);
	}
	
	function submit()
	{
		if (!$this->is_user_connected()) {
			return redirect('/login');
		}
	
		$color = $this->input->post('color');
		$house_id = $this->input->post('house_id');
		
		$price_color_regular =
			$this->config->item("FWL_house_price_color_regular");
		$price_color_gold =
			$this->config->item("FWL_house_price_color_gold");
			
		$price = -1;
		if ($color == "gold") {
			$price = $price_color_gold;
		}
		else {
			$price = $price_color_regular;
		}
		
		$has_enough_money = parent::take_money($price);
		if (!$has_enough_money) {
			parent::show_message(
				"אין מספיק כסף",
				"אין לך מספיק כסף כדי לקנות את הבית"
			);
			return;
		}
		
		$user_id = $this->session->userdata('user_id');
		$this->load->model('Houses');
		$this->Houses->buy_house($user_id, $house_id, $color);
		
		redirect("/welcome");
	}
	
	function _colorsArray($name)
	{
		$price_color_regular =
			$this->config->item("FWL_house_price_color_regular");
		$price_color_gold =
			$this->config->item("FWL_house_price_color_gold");
			
		$colors = array(
			'brown' => $this->_color_price_string("חום", $price_color_regular),
			'red' => $this->_color_price_string("אדום", $price_color_regular),
			'olive_green' => $this->_color_price_string("ירוק זית", $price_color_regular),
			'gold' => $this->_color_price_string("זהב", $price_color_gold),
			'green' => $this->_color_price_string("ירוק", $price_color_regular),
			'grey' => $this->_color_price_string("אפור", $price_color_regular),
			'pink' => $this->_color_price_string("וורוד", $price_color_regular),
			'purple' => $this->_color_price_string("סגול", $price_color_regular),
		);
		return array('name' => $name, 'options' => $colors);
	}
	
	function _color_price_string($color_name, $price)
	{
		return "$color_name - מחיר $price Fun-Coins";
	}
}

?>
