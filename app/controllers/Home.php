<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends DBS_Controller {

	/**
	 * Class constructor
	 * 
	 * @param None
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Class index/ page startup
	 * 
	 * @param None
	 * @return void
	 */
	public function index()
	{
		$this->data['title'] = self::pageTitle . 'Home';
		$this->data['baseline'] = 'layouts/home/index/home';
		$this->load->view('layouts/home/home_connector', $this->data);
	}
}
