<?php

class Register extends MY_Controller 
{
	function Register()
	{
		parent::MY_Controller();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}
	
	function index()
	{
		if ($this->is_user_connected()) {
			$this->redirect_to_main_page();
		}
	
		$data = array();
		$size = 30;
		$data["title"] = "Funworldlife - הרשמה";
		$data['username'] = $this->_form_array('username', $size);
		$data['password'] = $this->_form_array('password', $size);
		$data['email'] = $this->_form_array('email', $size);
		$data['fname'] = $this->_form_array('fname', $size);
		$data['lname'] = $this->_form_array('lname', $size);
		
		$data['day'] = $this->_numberStringArray("day", 1, 31);
		$data['month'] = $this->_months("month");
		$data['year'] = $this->_numberStringArray("day", 1800, 3000);
		
		$data['country'] = $this->_countries("country");
		
		$this->display_view('register_view', $data);
	}
	
	function submit()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		
/*
		$day = $this->input->post('day');
		$month = $this->input->post('month');
		$year = $this->input->post('year');
*/
		
		$country = $this->input->post('country');
		
		if ( strlen($password) < 4 ) {
			return $this->_error( "הסיסמה קצרה מדי<br>" );
		}
		
		if ( strlen($password) > 20 ) {
			return $this->_error( "הסיסמה ארוכה מדי (אסור יותר מ20 תוים)");
		}

		if (!$username || $username == "" ) {
			return $this->_error( "שם משתמש ריק<br>" );
		}
		
		if ( strlen($username) > 20 ) {
			return $this->_error( "שם המשתמש ארוך מדי (אסור יותר מ20 תוים)");
		}
		
		if ( $this->_checkEmail($email) == false ) {
			return $this->_error( "דואר אלקטרוני לא נכון<br>" );
		}
		
		if (!$fname || $fname == "")
		{
			return  $this->_error( "שם פרטי לא מלא");
		}
		if (!$lname || $lname == "")
		{
			return  $this->_error( "שם משפחה לא מלא");
		}
/*
		if (!$day || $day == "")
		{
			return  $this->_error( "יום בתאריך לידה לא מלא");
		}
		if (!$month || $month == "")
		{
			return  $this->_error( "חודש בתאריך לידה לא מלא");
		}
*/
		if (!$fname || $fname == "")
		{
			return  $this->_error( "שנה בתאריך לידה לא מלא");
		}

/*		
		$this->load->model('User', '', TRUE);
		
		if ( $this->User->user_exists($username) ) {
			return $this->_error( "המשתמש כבר קיים<br>" );
		}
				
		$id = $this->User->add_user($username, $password);
*/

		$creationSuccess = 
			$this->simpleloginsecure->create($username, $password);
		
		if (!$creationSuccess) {
			$errorCode = $this->simpleloginsecure->error_code;
			if ($errorCode == $this->simpleloginsecure->ERROR_USER_ALREADY_EXISTS) {
				return $this->_error("המשתמש כבר קיים");
			}
			else if ($errorCode == $this->simpleloginsecure->ERROR_DATABASE_INSERT) {
				return $this->_error("תקלה בהוספת המשתמש לבסיס הנתונים");
			}			
		}
		
		$id = $this->session->userdata('user_id');
		
		$this->load->model('UsersInfo', '', TRUE);
		
		$money = $this->config->item("FWL_starting_money");
		$health = $this->config->item("FWL_starting_health");
		
		$this->UsersInfo->add_user_info($id, $fname, $lname, $email, 
			$money, 1, 1, 2000, $health);
		
		// send email!!!!
		
		//He Regitsered Yey Yey
		redirect("/registerthanks");
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
	
	function _months($name)
	{
		$months = array(
			'01' => 'ינואר',
			'02' => 'פברואר',
			'03' => 'מרץ',
			'04' => 'אפריל',
			'05' => 'מאי',
			'06' => 'יוני',
			'07' => 'יולי',
			'08' => 'אוגוסט',
			'09' => 'ספטמבר',
			'10' => 'אוקטובר',
			'11' => 'נובמבר',
			'12' => 'דצמבר'
		);
		return array('name' => $name, 'options' => $months);
	}
	
	function _numberStringArray($name, $first, $last)
	{
		$numberStringArray = array();
		for ($i=$first; $i <= $last; $i++) {
			$str = strval($i);
			$numberStringArray[ $str ] = $str;
		}
		return array("name" => $name, "options" => $numberStringArray);
	}
	
	function _countries($name)
	{
		$countries = array(
			"Israel" => "ישראל",
			"America" => "אמריקה",
			"Turkey" => "טורקיה",
			"Canada" => "קנדה",
			"France" => "צרפת",
			"Africa" => "אפריקה",
			"Europe" => "אירופה"
		);
		return array("name" => $name, "options" => $countries);
	}	
	
	function _checkEmail($emailAddress = "") 
	{
		if (ereg("[[:alnum:]]+@[[:alnum:]]+\.[[:alnum:]]+", $emailAddress)) {
			return true;
		} else {
			return false;
		}
	}
	


}
?>