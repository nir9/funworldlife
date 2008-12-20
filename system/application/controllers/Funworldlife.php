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
		$data = array();
		$data['title'] = $title;
		$data['map'] = $map;
		$data['map_file'] = $map_file;
		$data["images_path"] = base_url() . "images/";
		$this->display_view('show_map', $data);
	}
}

?>
