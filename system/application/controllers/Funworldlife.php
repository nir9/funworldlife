<?php

class Funworldlife extends MY_Controller {
	var $must_be_connected;

	function Funworldlife()
	{
		parent::MY_Controller();	
		$this->load->helper('url');
		$this->load->helper('fwl_map_helper');
		
		$this->must_be_connected = false;
	}
	
	function set_must_be_connected($must_be_connected)
	{
		$this->must_be_connected = $must_be_connected;
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
		  
		@param map_name is an optional name.
	 */
	function show_map($title, $map, $map_file, $map_name="")
	{
		if ($this->must_be_connected) {
			if (!$this->is_user_connected()) {
				redirect('/login/', 'refresh');
				return false;
			}
		}
	
		$this->map_name = $map_name;
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
		
		return true;
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
	
	function take_money($money, $user_id=-1)
	{
		if ($user_id == -1) {
			$user_id = $this->session->userdata('user_id');
		}
		$this->load->model('UsersInfo');
		$current_money = $this->UsersInfo->get_money($user_id);
		if ($current_money < $money) {
			return false;
		}
		
		$new_money = $current_money - $money;
		$this->UsersInfo->change_money($user_id, $new_money);
		return true;
	}
	
	function create_additionals(&$additional_css, &$additional_body)
	{
		$this->create_additionals_for_job($additional_css, $additional_body);
		$this->create_additionals_for_houses($additional_css, $additional_body);
	}
	
	function create_additionals_for_job(&$additional_css, &$additional_body)
	{
		if ( $this->get_job_name() == "CleanStreet" )
		{
			$clean_street_chance = 
				$this->config->item("FWL_clean_street_chance");

			$result = rand(1, $clean_street_chance);
			if ($result != 1) {
				return;
			}
			$this->global_data["garbage"] = 1;
			$this->session->set_userdata('garbage', 1);
			
			$additional_css[] = create_additional_css(
				"Garbage1",
				790, 20,
				40, 40,
				base_url() . "images/garbage.png"
			);

			$additional_body[] = create_additional_body(
				"Garbage1", 
				site_url() . "/cleanstreet/collect", 
				'Collect Gargbage | לאסוף זבל'					
			);
/* Trying ajax:
"<a id='Garbage1' href='javascript:void(0)' onclick='jQuery.get(\"$site_url/cleanstreet/collect\", function(data){window.location.reload();})' title='Collect Gargbage | לאסוף זבל'></a>";
*/
		}
	}
	
	function create_additionals_for_houses(&$additional_css, &$additional_body)
	{
		$this->load->model('Houses');
		$houses = $this->Houses->get_houses_for_street($this->map_name);
		if ($houses == NULL) {
			return;
		}
		
		foreach ($houses as $house) {
			$house_id = $house["house_id"];
			$owner_id = $house["owner_id"];
			
			$css_id = "house_$house_id";
			$width = $this->config->item("FWL_house_image_width");
			$height = $this->config->item("FWL_house_image_height");
			
			if ($owner_id == -1) {
				$additional_css[] = create_additional_css(
					$css_id, $house["left"], $house["top"],
					$width, $height,
					base_url() . "images/house_buy_sign.png"
				);
				$additional_body[] = create_additional_body(
					$css_id, 
					"buyhouse/buy/$house_id", 
					"קנה את הבית"					
				);
			}
			else {
				// TODO: put the user name in the ALT of the image
				// we can get it from UsersInfo model with owner_id
				$color = $house["color"];
				$additional_css[] = create_additional_css(
					$css_id, $house["left"], $house["top"],
					$width, $height,
					base_url() . "images/house_$color.png"
				);
				$additional_body[] = create_additional_body(
					$css_id, 
					"showhouse/show/$owner_id", 
					"להיכנס לבית"
				);
			}
		}
	}
}

?>
