<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('my_model');	
		$this->load->library('form_validation');
        $this->load->library("pagination");
	}

	public function index()
	{
		$data['content'] = 'home';
		$data['session'] = $this->session->userdata('user_data');
		$this->load->view('home');
	}

	

}

