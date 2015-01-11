<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index()
	{
		$this->load->view('landing');
	}

	public function test()
	{
		$this->db->select('username');
   		$this->db->from('users');
   		$query = $this->db->get();

   		$data['userlist'] = $query->result();
   		$this->load->view('landing', $data);
	}
}

