<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Pilihcalon extends CI_Controller {



	public function __construct() {

        parent::__construct();

        $this->load->model('m_pilihcalon');

   		$this->load->helper(array('url')); //load helper url

    }



	public function index(){

		if (isset($this->session->userdata('user_data')['username'])) {

			if ($this->m_pilihcalon->ngecek($this->session->userdata('user_data')['nim'])) {

				redirect('pilihcalon/konfirm');	

			}else{

				$this->load->view('pilihcalon');	

			}

		}else{

			redirect('login');

		}

	}



	public function konfirm(){
		
		if (!$this->m_pilihcalon->ngecek($this->session->userdata('user_data')['nim'])) {

			redirect('pilihcalon');	

		}


		$this->load->view('konfirm');

	}



	public function vote1(){

		if ($this->m_pilihcalon->ngecek($this->session->userdata('user_data')['nim'])) {

			redirect('pilihcalon/konfirm');	

		}else{

			$nim = $this->session->userdata('user_data')['nim']; 

	        $nama = $this->session->userdata('user_data')['username']; 

	     	$pilihan = 1;  

	     	$data = array(

				'nama' => $nama,

				'nim' => $nim,

				'pilihan' => $pilihan

			);

			$this->m_pilihcalon->get_insert($data);

			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Terimakasih sudah berpartisipasi</div></div>");

			redirect('pilihcalon/konfirm');

		}

	}



	public function vote2(){

		if ($this->m_pilihcalon->ngecek($this->session->userdata('user_data')['nim'])) {

			redirect('pilihcalon/konfirm');	

		}else{

			$nim = $this->session->userdata('user_data')['nim']; 

	        $nama = $this->session->userdata('user_data')['username']; 

	        $pilihan = 2; 

	     	$data = array(

				'nama' => $nama,

				'nim' => $nim,

				'pilihan' => $pilihan

			);

			$this->m_pilihcalon->get_insert($data);

			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Terimakasih sudah berpartisipasi</div></div>");

			redirect('pilihcalon/konfirm');

		}

	}



	public function result()

	{

		$this->load->view('result');

	}



	public function getdonutchart()

	{

		$result = $this->m_pilihcalon->getdonutchart();



		header('Content-Type: application/json');

		echo json_encode($result);

	}



	public function getbarchart()

	{

		$result = $this->m_pilihcalon->getbarchart();



		header('Content-Type: application/json');

		echo json_encode($result);

	}



	public function getperprodi()

	{

		$result = $this->m_pilihcalon->getperprodi();



		header('Content-Type: application/json');

		echo json_encode($result);

	}



}