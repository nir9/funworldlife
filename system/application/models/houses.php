<?php
class Houses extends Model 
{	
    function Houses()
    {    
        parent::Model();
		$this->locations_table_name = "fwl_house_locations";
	}
	
	function get_houses_for_street($street_name)
	{
		$this->db->select("*");
		$this->db->from($this->locations_table_name);
		$this->db->where('street', $street_name);
		$query = $this->db->get();
		
		if ($query->num_rows() == 0) {
			return NULL;
		}
		else {
			return $query->result_array();
		}
	}
	
	function get_house_for_user_id($user_id)
	{
		$this->db->select("*");
		$this->db->from($this->locations_table_name);
		$this->db->where('owner_id', $user_id);
		$query = $this->db->get();
		
		if ($query->num_rows() == 0) {
			return NULL;
		}
		else {
			return $query->row();
		}
	}
	
	function buy_house($user_id, $house_id, $color)
	{
		$data = array(
			'owner_id' => $user_id,
			'color' => $color,
		);

		$this->db->where('house_id', $house_id);
		$this->db->update($this->locations_table_name, $data); 
	}
}