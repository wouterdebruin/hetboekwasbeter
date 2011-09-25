<?php

class Controller_Base extends Controller_Template {

	/**
	* @var string page template
	*/
	public $template = 'base';
	
	// Load the template and c
	public function before()
	{
		parent::before();//Loads the template
		
		$this->template->set("head", \View::factory("head") );
		$this->template->set("header", \View::factory("header") );
		$this->template->set("content","");
		$this->template->set("footer", \View::factory("footer") );
		$this->template->set("bodyjs", \View::factory("bodyjs") );
	}
}

