<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftarcalon extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('m_daftar');
   		$this->load->helper(array('url')); //load helper url
    }

	public function index(){
		if (isset($this->session->userdata('user_data')['username'])) {
			# code...
			$this->load->view('daftarcalon');
		}else{
			redirect('login');
		}
	}

	public function submit_calon(){
		$lk = $this->input->post('lk');
		$ketua = $this->input->post('namaketua');
		$wakil = $this->input->post('namawakil');
		$namagabungan = $this->input->post('namagabungan');
		$cp = $this->input->post('nohp');
		$pengalaman = $this->input->post('pengalaman');
		$visi = $this->input->post('visi');
		$misi = $this->input->post('misi');
		$motivasi = $this->input->post('motivasi');
		$foto = $this->input->post('foto');

		$data = array(
			'lk_dipilih' => $lk,
			'ketua' => $ketua,
			'wakil' => $wakil,
			'nama_gabungan' => $namagabungan,
			'cp' => $cp,
			'pengalaman_organisasi' => $pengalaman,
			'visi' => $visi,
			'misi' => $misi,
			'motivasi' => $motivasi,
			'foto' => $foto
		);
		$this->m_daftar->get_insert($data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Pendaftaran berhasil !!</div></div>");
		redirect('daftarcalon');

	}

		// $this->load->model('m_daftar');
		// $this->m_daftar->simpan_calon();
		// redirect("welcome");

}

