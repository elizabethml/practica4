<?php

/**
*
*Menu: generates de menu page
*
*
*@package lib
*@package constructs
*@author Elizabeth
*
*
**/

class menu{


	private $links;

	public function __construct($links)
	{
			$this->links=$links;
	}


	public function show(){
		echo'<ul>';
		foreach ($this->links as $key => $value) {
			echo '<li><a href="'.$value.'">'.$key.'</a></li>';
			}			
		echo'</ul>';



	}
}