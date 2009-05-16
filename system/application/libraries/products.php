<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

// Products library

class Products {
	
	function Products( $params )
	{	
		if ($params) {
			if (isset($params["id"])) {
				$this->_userId = $params["id"];
			}
			else {
				$this->_userId = -1;
			}
		}
		else {
			$this->_userId = -1;
		}
		
		if ($this->_userId == -1) {
			$this->_products = array();
			$this->_my_shop = array();
			return;
		}
		
		$this->_get_products_from_db();
	}
	
	function has_product($id)
	{
		return isset( $this->_products[$id] );
	}
	
	function add_product($id, $amount=1)
	{
		if (isset($this->_products[$id]))
		{
			$this->_products[$id] = $this->_products[$id] + $amount;
		}
		else 
		{		
			$CI =& get_instance();
			$length_serialized = strlen(serialize($this->_products));
			if ( $length_serialized+8 > $CI->config->item('FWL_products_field_limit') )  {
				return false;
			}
			$this->_products[$id] = $amount;			
		}
		$this->_update_products_to_db();
		
		return true;
	}	
	
	function remove_product($id, $amount)
	{
		if ( $this->_products[$id] > $amount )
		{
			$this->_products[$id] = $this->_products[$id]-$amount;
		}
		else if ( $this->_products[$id] == $amount )
		{
			unset( $this->_products[$id] );
		}
		else
		{
			return false;
		}
		$this->_update_products_to_db();
		return true;
	}
	
	function add_my_shop_product($id, $price)
	{
		$this->_my_shop[$id] = $price;
		$this->_update_products_to_db();
	}
	
	function remove_my_shop_product($id)
	{
		if (isset($this->_my_shop[$id])) {
			unset($this->_my_shop[$id]);
			$this->_update_products_to_db();
		}
	}
	
	function add_product_to_user( $user_id, $id, $amount )
	{
		$CI =& get_instance();
		$CI->load->model('UsersProductsModel', '', TRUE);
		$row = $CI->UsersProductsModel->get_products($user_id);
		$_products = $row->products;
		$_my_shop = $row->my_shop;
		
		$products = array();
		if ($_products != NULL) {
			$products = unserialize($_products);
		}
		
		$my_shop = array();
		if ($_my_shop != NULL) {
			$my_shop = unserialize($_my_shop);
		}
		
		if (isset($products[$id]))
		{
			$products[$id] = $products[$id] + $amount;
		}
		else 
		{		
			$CI =& get_instance();
			$length_serialized = strlen(serialize($products));
			if ( $length_serialized+8 > $CI->config->item('FWL_products_field_limit') )  {
				return false;
			}
			$products[$id] = $amount;			
		}
		
		$CI =& get_instance();
		$CI->load->model('UsersProductsModel', '', TRUE);
		$CI->UsersProductsModel->set_products($user_id, serialize($products), serialize($my_shop) );
	}
	
	function get_products()
	{
		return $this->_products;
	}
	
	function get_my_shop()
	{
		return $this->_my_shop;
	}
	
	function _get_products_from_db()
	{
		$CI =& get_instance();
		$CI->load->model('UsersProductsModel', '', TRUE);
		$row = $CI->UsersProductsModel->get_products($this->_userId);
		
		if ($row != NULL) {
			$products = $row->products;
			$my_shop = $row->my_shop;
		}
		else {
			$products = NULL;
			$my_shop = NULL;
		}
		
		if ($products != NULL) {
			$this->_products = unserialize($products);
		}
		else {
			$this->_products = array();
		}
		
		if ($my_shop != NULL) {
			$this->_my_shop = unserialize($my_shop);
		}
		else {
			$this->_my_shop = array();
		}
	}
	
	function _update_products_to_db()
	{
		$products = serialize($this->_products);
		$my_shop = serialize($this->_my_shop);
	
		$CI =& get_instance();
		$CI->load->model('UsersProductsModel', '', TRUE);
		$CI->UsersProductsModel->set_products($this->_userId, $products, $my_shop);
	}
}
?>