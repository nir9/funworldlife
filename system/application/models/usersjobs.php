<?php
class UsersJobs extends Model 
{	
    function UsersJobs()
    {    
        parent::Model();
		$this->table_name = "fwl_jobs";
	}
	
	function set_user_job($user_id, $job_name)
	{
		$currentJob = $this->get_user_job($user_id);
				
		if ($currentJob == NULL) {
			$data = array(
				'user_id' => $user_id,
				'job_name' => $job_name
			);
			$this->db->insert($this->table_name, $data);
		}				
		else {
			$data = array(
				'job_name' => $job_name
			);
			$this->db->where('user_id', $user_id);
			$this->db->update($this->table_name, $data);
		}		
	}
	
	function get_user_job($user_id)
	{
		$this->db->select("*");
		$this->db->from($this->table_name);
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		
		if ($query->num_rows() == 0) {
			return NULL;
		}
		else {
			$row = $query->row();
			return $row->job_name;
		}
	}
}