<?php 

/**
*Page: generates one web page
*
*@package lib
*@subpackage constructs
*@author Elizabeth
*
**/

	class page{

		private $header;
		private $menu;
		private $contents;
		private $foot;
	

public function __construct($title,$logo,$css,$links,$article,$footer){
		
		$this->header=new header($title,$logo,$css);
		$this->menu=new menu($links);
		$this->contents=new contents($article);
		$this->foot=new foot($footer);
		
	}


	public function show()
	{
		$this->header->show();
		$this->menu->show();
		$this->contents->show();
		$this->foot->show();
	
	}

	}