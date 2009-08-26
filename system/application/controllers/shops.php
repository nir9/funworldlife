<?php
require "Funworldlife.php";

class Shops extends Funworldlife 
{
	function Shops()
	{
		parent::Funworldlife();
		$this->set_must_be_connected(true);
		$this->load->helper('form');
		//header("Cache-Control: no-cache, must-revalidate"); 
		
		$this->categories = array(
			'food' => array('מזונה - חנות מזון', 'shopkeeperfood.png'),
			'fre' => array('פאן רהיטים - חנות רהיטים', ''),
			'sovi' => array('מזקרותיה - חנות מזקרות', ''),
/*
			'pet' => 'חנות חיות',
			'telepone' => 'חנות טלפון', 
			'car' => 'חנות מכוניות', 
			'gift' => 'חנות מתנות', 
			'flower' => 'חנות פרחים', 
			'holem' => 'בית חולים', 
			'cofie' => 'חנות קפה',
			'room' => 'חנות רהיטים',
			'news' => 'חנות עיתונים',
			'plants' => 'חנות צמחים ועצים',
			'books' => 'חנות ספרים',
			'games' => 'חנות משחקים',
			'tickets' => 'חנות כרטיסים להצגה',
			'swords' => 'חנות כלי נשק',
			'shirts' => 'חנות בגדים',
			'ballon' => 'חנות בלונים',
			'bat' => 'חנות בטריות',
			'tach' => 'חנות תחשיטים',
			'boba' => 'חנות בובות',
			'ele' => 'חנות דברי אלקטרוניקה',
			'mav' => 'חנות כלי עבודה',
			'mas' => 'חנות מזקרות',
			'sport' => 'חנות ספורט',

*/
		);		

	}
	
	function index()
	{
		$data = array();
		$data["title"] = "קניון העיר";
		
		$data["categories"] = $this->categories;
		
		$this->display_view('shops_view', $data);
	}
	
	function shop($category)
	{
		if (!isset($this->categories[$category])) {
			print "ERROR";
			return;
		}
		$category_title = $this->categories[$category][0];
		$shopkeeper_image = $this->categories[$category][1];
	
		$data = array();
		$data["title"] = $category_title;
		$data["shopkeeper_image"] = $shopkeeper_image;
		
		$this->load->model('ProductsModel', '', TRUE);
		$categories = array($category);
		$products = $this->ProductsModel->get_products($categories);
		
		if ($products == NULL) {
			print "ERROR";
			return;
		}
		$data["products"] = $products;
		
		$data["images_path"] = base_url() . "images" ;
		$data["products_images_path"] = base_url() . "images/products";
		$data["buyproduct_page"] = "buyproduct/submit";
		$data["owner_data"] = NULL;
		
		$this->display_view("shop_view", $data);
	}
}
?>