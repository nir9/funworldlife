<?php
class MY_Controller extends Controller {   
	var $global_data = array();
    var $global_view_data = array();
  
    function MY_Controller() 
	{   
        parent::Controller();   
  
		if($this->session->userdata('logged_in')) {
			$user_id = $this->session->userdata('user_id');
			
			$this->load->model('UsersInfo');
			$this->global_view_data["user_info"] = 
				$this->UsersInfo->get_user_info($user_id);
			$this->global_view_data["user_name"] = 
				$this->session->userdata('user_name');
			
			$this->load->model('UsersJobs');
			$this->global_view_data["job_name"] = $this->UsersJobs->get_user_job($user_id);
			
		}
        //$this->load->model('Twitter_model', 'twitter');   
        //$this->global_view_data['twitter'] = $this->twitter->get_twitter_status();   
  
        // other common stuff; for example you may want a global cart, login/logout, etc.   
    }   
  
    // create a simple wrapper for the CI load->view() method   
    // but first, merge the global and local data into one array   
    function display_view($view, $local_data = array()) 
	{   
        $data = array_merge($this->global_view_data, $local_data);
        return $this->load->view($view, $data);   
    }
	
	function get_job_name()
	{
		if (isset($this->global_view_data["job_name"])) {
			return $this->global_view_data["job_name"];
		}
		else {
			return NULL;
		}
	}
	
	function show_message($title, $message)
	{
		$data = array();
		$data['title'] = $title;
		$data['message'] = $message;
		$this->display_view('message_view', $data);
	}
	
	function is_user_connected()
	{
		return $this->session->userdata('logged_in');
	}
	
	function redirect_to_main_page()
	{
		redirect("/welcome");
	}
}  
?>
