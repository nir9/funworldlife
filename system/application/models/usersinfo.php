<?php
class UsersInfo extends Model 
{
	private static $table_name = "fwl_users_info";
	
    function UsersInfo()
    {     
        parent::Model();
    }

	function add_user_info($id, $fname, $lname, $email, $money, 
		$birthday_day, $birthday_month, $birthday_year, $health)
	{
		$data = array(
			'user_id' => $id, 
			'first_name' => $fname,
			'last_name' => $lname,
			'email' => $email,
			'money' => $money,
			'birthday_day' => $birthday_day,
			'birthday_month' => $birthday_month,
			'birthday_year' => $birthday_year,
			'health' => $health
		);
		
		$this->db->insert(self::$table_name, $data);
	}
	
	function get_user_info($userid)
	{
		$this->db->select("*");
		$this->db->from($table_name);
		$this->db->where('id', $userid);
		$query = $this->db->get();
		return $query->row(); 	
	}
	
	function get_user_info_with_username($userid)
	{
		/*$this->db->select("*");
		$this->db->from($table_name);
		$this->db->where('id', $userid);
		//$this->db->join($table_name, ' users.id = $table_name.id');
		$query = $this->db->get();*/
		
		$query = $this->db->query( "SELECT * FROM $table_name " .
		"INNER JOIN users ON " . $table_name . ".id=users.id " .
		"WHERE $table_name.id='$userid'");
		
		return $query->row(); 			
	}
	
	function get_username($email)
	{
		$this->db->select("*");
		$this->db->from($table_name);
		$this->db->where('email', $email);
		$this->db->join('users', 'users_info.id = users.id');		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	function get_email_password($username)
	{
		$this->db->select("*");
		$this->db->from('users');
		$this->db->where('username', $username);
		$this->db->join($table_name, $table_name . '.id = users.id');
		$query = $this->db->get();
		return $query->row(); 
	}
	
	function get_money($id)
	{
		$this->db->select("money");
		$this->db->from($table_name);
		$this->db->where('id', $id);
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			$row = $query->row();
			return $row->money;
		}				
		else {
			return -1;
		}
	}
	
	function change_money($id, $money)
	{
		$data = array(
               'money' => $money
            );

		$this->db->where('id', $id);
		$this->db->update($table_name, $data); 	
	}
	
	
	function _get_user_id($username)
	{
		$this->db->select('id');
		$this->db->from('users');
		$this->db->where('username', $username);
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			$row = $query->row();
			return $row->id;
		}				
		else {
			return -1;
		}
	}
      
}