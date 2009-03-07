<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('create_additional_css'))
{
	function create_additional_css($id, $left, $top, $width, $height, $image)
	{
		return
"#$id {
float: left;
position: absolute;
margin-left:  $left" . "px;
margin-top: $top" . "px;
width: $width" . "px;
height: $height" . "px;
background: url('$image');
}";
	}
	
	function create_additional_body($id, $href, $title)
	{
		return
"<a id='$id' href='$href' title='$title'></a>";
	}
}
