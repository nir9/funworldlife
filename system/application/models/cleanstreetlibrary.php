<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class CleanstreetLibrary extends Model {
	function CleanstreetLibrary($params=NULL)
	{
		$this->garbageAmount = 0;
	}
	
	function garbageAmount()
	{
		return $this->garbageAmount;
	}

    function addGarbage()
    {
		$this->garbageAmount = 1;
    }
	
	function removeGarbage()
	{
		$this->garbageAmount = 0;
	}
}

?>