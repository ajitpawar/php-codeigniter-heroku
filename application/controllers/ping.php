<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ping extends CI_Controller {

	public function index()
	{
		$this->load->view('ping');
	}

}
