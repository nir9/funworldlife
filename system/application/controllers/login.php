<?php

class Login extends MY_Controller 
{	
	function Login()
	{
		parent::MY_Controller();
		$this->load->helper(array('form', 'url'));
		$this->referer = "";
	}

	function index()
	{
		$this->referer = $this->input->server('HTTP_REFERER');
		if ($this->is_user_connected()) {
			$this->redirect_to_referer();
		}
	
		$data = array();
		$data["title"] = "Funworldlife - התחברות";
		$data["username"] = $this->_form_array("username", 20);
		$data["password"] = $this->_form_array("password", 20);
		$this->display_view('login_view', $data);
	}
	
	function submit()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// attempt to login
		$login_success = 
			$this->simpleloginsecure->login($username, $password);
		if($login_success) {
			// success
		}
		else {
			return $this->_error( "משתמש לא קיים או סיסמה שגויה<BR>" );
		}
		
		//$this->_loadProducts($id);	
		$this->redirect_to_referer();
	}
	
	function redirect_to_referer()
	{
		$no_referer = $this->referer == "";
		$referer_is_me = $this->referer == site_url() . "login";
		
		if ($no_referer || $referer_is_me) {
			redirect("/welcome");			
		}
		else {
			redirect($this->referer);
		}
	}
	
	function logout()
	{
		$this->simpleloginsecure->logout();
		$this->redirect_to_main_page();
	}
	
	function _error($message)
	{
		$data['message'] = $message;
		$this->display_view('error_view', $data);
	}
	
	function _form_array($name, $size)
	{
		return array('name' => $name, 'id' => $name, 'size' => '$size', 'maxlength' => '$size');
	}

	function _loadProducts($id)
	{
		
	}
	
}
?>