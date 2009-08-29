<?php
class ProductsModel extends Model 
{
    function ProductsModel()
    {     
        parent::Model();
		$this->db->query("SET NAMES 'utf8'"); 
		$this->table_name = 'fwl_products';
    }
	
	function get_products($categories)
	{
		$this->db->select("*");
		$this->db->from($this->table_name);
		//$where = '0=1';
		$where = array();
		foreach ($categories as $category) {
			$where['category'] = $category;
			//$where = "$where OR category='$category'";
		}
		$this->db->where($where);
		
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {		
			return $query->result_array();
		}
		else {
			return NULL;
		}
	} 
	
	function get_product_price($product_id)
	{
		$this->db->select("price");
		$this->db->from($this->table_name);
		$this->db->where("product_id = '$product_id'");
		
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$row = $query->row();
			return $row->price;
		}
		else {
			return NULL;
		}
	} 

	function get_product_name($product_id)
	{
		$this->db->select("*");
		$this->db->from($this->table_name);
		$this->db->where("product_id = '$product_id'");
		
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			$row = $query->row();
			return $row->name;
		}
		else {
			return NULL;
		}		
	}	
	
	function get_products_info($product_ids)
	{
		$this->db->select("*");
		$this->db->from($this->table_name);
		$where = "product_id = '-1'";
		foreach ($product_ids as $product_id => $amount) {
			$where = "$where OR product_id='$product_id'";
		}
		$this->db->where($where);
		
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {		
			return $query->result_array();
		}
		else {
			return NULL;
		}		
	}
}
