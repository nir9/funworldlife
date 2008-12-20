<?php
class MY_Controller extends Controller {   
    var $global_data = array();   
  
    function MY_Controller() 
	{   
        parent::Controller();   
  
		if($this->session->userdata('logged_in')) {
			$user_id = $this->session->userdata('user_id');
			$this->load->model('UsersInfo', 'UsersInfo');
			$this->global_data["user_info"] = $this->UsersInfo->get_user_info($user_id);
		}
        //$this->load->model('Twitter_model', 'twitter');   
        //$this->global_data['twitter'] = $this->twitter->get_twitter_status();   
  
        // other common stuff; for example you may want a global cart, login/logout, etc.   
    }   
  
    // create a simple wrapper for the CI load->view() method   
    // but first, merge the global and local data into one array   
    function display_view($view, $local_data = array()) {   
        $data = array_merge($this->global_data, $local_data);
        return $this->load->view($view, $data);   
    }   
}  
?>
