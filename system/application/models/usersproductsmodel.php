<?php
class UsersProductsModel extends Model 
{
    function UsersProductsModel()
    {     
        parent::Model();
		$this->table_name = "fwl_users_products";
    }
	
	function get_products($user_id)
	{
		$this->db->select("products, my_shop");
		$this->db->from($this->table_name);
		$this->db->where("user_id = '$user_id'");
		
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$row = $query->row();
			return $row;
		}				
		else {
			return NULL;
		}
	} 
	
	function set_products($user_id, $products, $my_shop = "")
	{
		$this->db->delete($this->table_name, array('user_id' => $id)); 
		$this->db->insert($this->table_name, 
			array('user_id' => $id, 'products' => $products, 'my_shop' => $my_shop));
	}
}
