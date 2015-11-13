<?php

/**
*
*Header: generates de header page
*
*
*@package lib
*@package constructs
*@author Elizabeth
*
*
**/

class header{

	private $title;
	private $logo;
	//private $css;

public function __construct($title,$logo,$css){
		
		$this->title=$title;
		$this->logo=$logo;
		$this->css=$css;
		
	}


public function show(){

	$html= LAYOUT.$this ->css.'</style></head><body>';
	echo $html;
	echo '<header>';
	echo '<img width="50px" src="'.$this->logo.'"/></img>';
	echo '<h1>'.$this->title.'</h1>';
	echo '</header>';

	}


}