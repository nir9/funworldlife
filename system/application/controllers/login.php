<?php

class Login extends Controller 
{	
	function Login()
	{
		parent::Controller();
		$this->load->helper(array('form', 'url'));
		$this->referer = "";
	}

	function index()
	{
		$this->referer = $this->input->server('HTTP_REFERER');
	
		$data = array();
		$data["title"] = "התחברות לעיר הוירטואלית";
		$data["username"] = $this->_form_array("username", 20);
		$data["password"] = $this->_form_array("password", 20);
		$this->load->view('login_view', $data);
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
		
		if ($this->referer != "") {
			redirect($this->referer);
		}
		else {
			redirect("/welcome");
		}
	}
	
	function logout()
	{
		$this->simpleloginsecure->logout();
		redirect("/welcome");
	}
	
	function _error($message)
	{
		$data['message'] = $message;
		$this->load->view('error_view', $data);
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