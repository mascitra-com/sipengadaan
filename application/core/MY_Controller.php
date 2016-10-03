<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	// Methode _remap
	function _remap($method, $param = array())
	{
		if (method_exists($this, $method) && $method != 'index'){
			return call_user_func_array(array($this, $method), $param);
		}else{
			$this->index();
		}
	}

	// Method init
	// Berfungsi untuk me-load semua tampilan
	// dan segala macam logika yang dijalankan ketika akan
	// me-load tampilan
	protected function init($view, $data=null)
	{
		$this->load->view('_header');
		
		if($data != null && $data !=''){
			$this->load->view($view, $data);
		}else{
			$this->load->view($view);
		}

		$this->load->view('_footer');
	}
}
