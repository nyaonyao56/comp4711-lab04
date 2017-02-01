<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		$record = $this->quotes->get(6);
		$this->data = array_merge($this->data, $record);
		$this->data['pagebody'] = 'justone';
		$this->render();
	}

}
