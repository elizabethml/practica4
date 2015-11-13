<?php
/**
*
*Content: generates de content page
*
*
*@package lib
*@package constructs
*@author Elizabeth
*
*
**/

class contents{

	private $article;

	public function __construct($article){

		$this->article=$article;
		
	}

	public function show(){

	echo '<h1>'.$this->article.'</h1>';

	}

}