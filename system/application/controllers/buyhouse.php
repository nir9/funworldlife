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

		/*
		$price_for_dunam = $this->config->item("FWL_price_for_dunam");
		$house_price = $price_for_dunam * (float)$house_size;
		$owner_id = $this->session->userdata('userid');
		
		$this->load->model('UsersInfo', '', TRUE);
		
		$money = $this->UsersInfo->get_money($owner_id);
		if ($money < $house_price) {
			return $this->_error("אין מספיק כסף! צריך לפחות $house_price");
		}
		
		$this->UsersInfo->change_money($owner_id, $money - $house_price);
		
		$this->load->model('House', '', TRUE);
		$id = $this->House->add_house($owner_id, $id, $house_size, $color, $city_id);
		*/
		
		redirect("/welcome");
	}
	
	function _colorsArray($name)
	{
		$colors = array(
			'brown' => 'חום',
			'red' => 'אדום',
			'olive_green' => 'ירוק זית',
			'gold' => 'זהב',
		);
		return array('name' => $name, 'options' => $colors);
	}
}

?>
