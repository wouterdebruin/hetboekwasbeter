<?php

/**
 * The Matching Controller.
 * 
 * @package  app
 * @extends  Controller
 */
class Controller_Matching extends Controller_Base {

	/**
	 * The index action.
	 * 
	 * @access  public
	 * @return  void
	 */
	public function action_index()
	{
		$this->template->content = View::factory('matching/index');
	}
}

/* End of file welcome.php */
