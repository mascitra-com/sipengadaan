<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blank extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		// Load model, library, helper disini
	}

	public function index()
	{
		$this->init('v_blank');
	}
}
