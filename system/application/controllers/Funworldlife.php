<?php

class Funworldlife extends MY_Controller {

	function Funworldlife()
	{
		parent::MY_Controller();	
		$this->load->helper('url');
	}
	
	/** Show an image map
		@param title is the map page title
		
		@param map_file is an array with following fields:
		  * file - image file to show.
		  * width - image width in pixels.
		  * height - image height in pixels.
		  
		@param map is an array of arrays, each containing a map entry:
		  * id - the map area id, this
		  * href - 
		  * title - the text that appears when you hover on the area.
		  * left - 
		  * top -
		  * width -
		  * height
	 */
	function show_map($title, $map, $map_file)
	{
		$additional_css = array();
		$additional_body = array();
		$this->create_additionals($additional_css, $additional_body);
		
		$data = array();
		$data['title'] = $title;
		$data['map'] = $map;
		$data['map_file'] = $map_file;
		$data["images_path"] = base_url() . "images/";
		$data["additional_css"] = $additional_css;
		$data["additional_body"] = $additional_body;
		$this->display_view('show_map', $data);
	}
	
	function add_money($money, $user_id=-1)
	{
		if ($user_id == -1) {
			$user_id = $this->session->userdata('user_id');
		}
		$this->load->model('UsersInfo');
		$current_money = $this->UsersInfo->get_money($user_id);
		$new_money = $current_money + $money;
		$this->UsersInfo->change_money($user_id, $new_money);
	}
	
	function create_additionals(&$additional_css, &$additional_body)
	{
		if ( $this->get_job_name() == "CleanStreet" )
		{
			$clean_street_chance = 
				$this->config->item("FWL_clean_street_chance");

			$result = rand(1, $clean_street_chance);
			if ($result != 1) {
				return;
			}
			$this->CleanstreetLibrary->addGarbage();
			
			$base_url = base_url();
			$site_url = site_url();
			
			$additional_css[] = 
"#Garbage1 {
float: left;
position: absolute;
margin-left: 790px;
margin-top: 20px;
width: 40px;
height: 40px;
background: url('$base_url" . "images/garbage.png');
}";
			$additional_body[] = 
			"<a id='Garbage1' href='$site_url/cleanstreet/collect' title='Collect Gargbage | לאסוף זבל'></a>";
/* Trying ajax:
"<a id='Garbage1' href='javascript:void(0)' onclick='jQuery.get(\"$site_url/cleanstreet/collect\", function(data){window.location.reload();})' title='Collect Gargbage | לאסוף זבל'></a>";
*/
		}
		
	}
}

?>
