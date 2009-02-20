<?php
require "Funworldlife.php";

class Cleanstreet extends Funworldlife {
	function index()
	{
		global $map;
		global $map_file;
		$this->set_must_be_connected(true);
		parent::show_map('Funworldlife - ניקוי רחובות', $map, $map_file);
	}
	
	function acceptjob($yesNo)
	{
		if ($yesNo == "yes") {
			$user_id = $this->session->userdata('user_id');
			$this->load->model('UsersJobs');
			$this->UsersJobs->set_user_job($user_id, 'CleanStreet');
			$this->redirect_to_mainPage();
		}
		else {
			redirect("/pikework");
		}
	}
	
	function collect()
	{
		// 1. Check if there's garbage
		// 2. Add money to account
		// 3. Return to previous page

		if ($this->session->userdata('garbage') == 0) {
			parent::show_message("שגיאה", ".לא נמצא זבל, אנא נסו למצוא ברחובות");
			return;
		}
		else {
			$this->session->set_userdata('garbage', 0);
		}
		
		$money =
			$this->config->item("FWL_clean_street_money");
		parent::add_money($money);
		
		parent::show_message('קיבלת כסף', 'קיבלת כסף');
	}
}

$map_file = array (
	"file" => "Cleanstreet_Admin.png",
	"width" => 945,
	"height" => 568
);

$map = array(
	array( 
		"id" =>  "yes", 
		"href" => "cleanstreet/acceptjob/yes", 
		"title" => "ניקוי רחובות( העבודה הכי פשוטה) ",
		"left" => 139, 
		"top" => 316, 
		"width" => 614, 
		"height" => 252
	),
	
	array( 
		"id" =>  "no" ,
		"href" => "cleanstreet/acceptjob/no", 
		"title" => "לחץ כאן כדי להיכנס למלחמה",
		"left" => 78,
		"top" => 0,
		"width" => 124,
		"height" => 271
	),

);

?>
