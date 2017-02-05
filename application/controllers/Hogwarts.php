<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hogwarts extends Application

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
		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
		$authors = array ();
		foreach ($source as $record)
		{
			$authors[] = array ('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
		}
		$this->data['authors'] = $authors;

		$this->render();
	}

	public function shucks(){
		$this->data['pagebody'] = 'justone';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->get(2);

		//$authors[] = array ('who' => $source['who'], 'mug' => $source['mug'], 'href' => $source['where']);
		$this->data['mug'] = $source['mug'];
		$this->data['who'] = $source['who'];
		$this->data['what'] = $source['what'];

		$this->render();		
	}
	
	public function random() {
				
		$record = $this->quotes->get(rand(1,6));
		$this->data = array_merge($this->data, $record);
		$this->data['pagebody'] ='justone';
		$this->render();
		
		
	}

}
