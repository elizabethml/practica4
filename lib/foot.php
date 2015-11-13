<?php
/**
*
*Foot: generates de footer page
*
*
*@package lib
*@package constructs
*@author Elizabeth
*
*
**/

class foot{

	private $footer;


	public function __construct($footer)
	{
	
		$this->footer=$footer;
		
	}

	public function show(){

	echo '<h1>'.$this->footer.'</h1>';


	}
}