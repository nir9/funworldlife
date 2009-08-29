<?php
require "Funworldlife.php";

class Road4 extends Funworldlife {
	function index()
	{
		global $map;
		global $map_file;
		parent::show_map('Funworldlife - רחוב רביעי', $map, $map_file);
	}
	
	function dig()
	{
		$this->set_must_be_connected(true);
		if (!$this->is_user_connected()) {
			return $this->index();
		}
		
		if ( !$this->_isAllowedToDig() ) {
			parent::set_status_message("עליך לחכות עוד מספר שניות");
			return $this->index();
		}
		
		$this->_startingToDig();
		
		if ( $this->dig_product( "FWL_dig_chance_gold", "FWL_dig_product_id_gold") ) {
		}		
		else if ( $this->dig_product( "FWL_dig_chance_crystal", "FWL_dig_product_id_crystal") ) {
		}		
		else if ( $this->dig_product( "FWL_dig_chance_new_shoe", "FWL_dig_product_id_new_shoe") ) {
		}		
		else if ( $this->dig_product( "FWL_dig_chance_old_shoe", "FWL_dig_product_id_old_shoe") ) {
		}

		$this->index();
	}
	
	function dig_product($chanceConfigItem, $productIdConfigItem)
	{
		$chance = $this->config->item($chanceConfigItem);
		$product_id = $this->config->item($productIdConfigItem);
		
		$result = rand(1, $chance);
		if ($result != 1) {
			return false;
		}
		
		// Success - add the product
		$user_id = $this->session->userdata('user_id');	
		$this->load->library('Products', array('id' => $user_id));
		$result = $this->products->add_product((int)$product_id, (int)1);
		
		$this->load->model('ProductsModel', '', TRUE);
		$product_name = $this->ProductsModel->get_product_name($product_id);
		if ($product_name != NULL) {
			parent::set_status_message("זכית במוצר $product_name");
		}
		
		return true;
	}
	
	function _isAllowedToDig()
	{
		$this->load->helper('cookie');
		$cookie = get_cookie('JobTimer');	
		$time_between = $this->config->item('FWL_seconds_between_digs');
		
		/*print time()-(int)$cookie;
		print $time_between;
		return false;*/
		
		return ( time()-(int)$cookie > $time_between );
	}
	
	function _startingToDig()
	{
		$this->load->helper('cookie');

		$cookie = array(
                   'name'   => 'JobTimer',
                   'value'  => time(),
                   'expire' => '86500',
                   //'domain' => '.funworldlife.com',
               );

		set_cookie($cookie); 	
	}
}

$map_file = array (
	"file" => "Road_4.png",
	"width" => 945,
	"height" => 568
);

$map = array(

	
		
	array( 
		"id" =>  "arrow_left", 
		"href" => "road3", 
		"title" => "לרחוב הקודם",
		"left" => 0, 
		"top" => 191, 
		"width" => 89, 
		"height" => 63
	),	
	
		

	array( 
		"id" =>  "arrow_right", 
		"href" => "road5", 
		"title" => "לרחוב הבא",
		"left" => 853, 
		"top" => 204, 
		"width" => 79, 
		"height" => 51
	),	
	
	
	
	array(
		"id" => "dig",
		"href" => "road4/dig",
		"title" => "חפור באדמה",
		"left" => 400, 
		"top" => 200, 
		"width" => 100, 
		"height" => 100
	),
);

?>
