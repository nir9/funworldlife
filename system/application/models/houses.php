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
}