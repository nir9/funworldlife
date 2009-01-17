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
	
	function create_additionals(&$additional_css, &$additional_body)
	{
		if ( $this->get_job_name() == "CleanStreet" )
		{
			$result = rand(1, 5);
			if ($result != 1) {
				return;
			}
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
		}
		
	}
}

?>
