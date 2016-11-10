<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('login_model');	
		$this->page_title();
	}

	public function index()
	{
		if (isset($this->user) && !empty($this->user)) {
			redirect('welcome');
		}

		$this->get_user_login();

		$data['message'] = $this->session->flashdata('message');
		$this->load->view('login', $data);
	}

	protected function get_user_login() {
		// get user login
		$session = $this->session->userdata('user_data');
		if (empty($session)) {
			$this->user = $session;
		} else {
			redirect('pilihcalon/konfirm');
		}
	}


	public function login_validation()
	{
		
		$curl = curl_init();
		$nim = $_POST['username'];
		$password = $_POST['password'];
		//echo $nim;
		//echo $password;

		curl_setopt_array($curl, array(
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_URL => "http://ukdw.ac.id/id/home/do_login",
				CURLOPT_POST => 1,
				CURLOPT_HTTPAUTH => CURLAUTH_ANY,
				CURLOPT_REFERER=> "http://ukdw.ac.id/id/home/login",
				CURLOPT_HTTPHEADER => array("POST id/home/login HTTP/1.0"),
				CURLOPT_COOKIEJAR => "cookie.txt",
				CURLOPT_TIMEOUT => 60,
				//CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_POSTFIELDS => "return_value=&id=" . $nim . "&password=" . $password
			));	
		
		$hasil = curl_exec($curl);
		//$statusCode=curl_getinfo($curl, CURLINFO_HTTP_CODE);
		$url = curl_getinfo($curl, CURLINFO_REDIRECT_URL);
		$html = htmlentities($hasil,ENT_IGNORE);
		
		echo $html;
		
		if($url=="http://ukdw.ac.id/portal"){
			//echo "login berhasil";
			//echo $homeDir;

			curl_setopt_array($curl, array(
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_URL => "http://ukdw.ac.id/id/home/do_login",
				CURLOPT_POST => 1,
				CURLOPT_HTTPAUTH => CURLAUTH_ANY,
				CURLOPT_REFERER=> "http://ukdw.ac.id/id/home/login",
				CURLOPT_HTTPHEADER => array("POST id/home/login HTTP/1.0"),
				CURLOPT_COOKIEJAR => "cookie.txt",
				CURLOPT_TIMEOUT => 30,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_POSTFIELDS => "return_value=&id=" . $nim . "&password=" . $password
			));	
			$hasil = curl_exec($curl);
			//$html = htmlentities($hasil,ENT_IGNORE);
			$startChop = '2><a href="http://ukdw.ac.id/portal/profil/mahasiswa/' . $nim . '">';
			$endChop = '</a></h2>';
			$startName = stripos($hasil, $startChop);
			$endName = stripos($hasil, $endChop);
			$nama = substr(substr($hasil, $startName, $endName-$startName),63);
			session_start();
			$_SESSION['user']=$nama;
			$_SESSION['nim']=$nim;
			//echo "berhasil";
			$user_data = array(
                'username' => $nama,
                'nim' => $nim,
                'loggedin' => TRUE
                );
   			$this->session->set_userdata('user_data', $user_data);         #to set the session with the above array

			//$this->session->set_userdata('session_operator',$_SESSION['user_name'],$_SESSION['nim'] );
			echo 	$this->session->set_userdata('user_data', $user_data);         #to set the session with the above array
	
			redirect('pilihcalon');

			//redirect($query['role_default_url']);
			
		}else{
			//echo "anjir";
			redirect('login');
		}
	
		curl_close($curl);

	}

	// logout
	public function logout() {
		
		$this->session->unset_userdata('user_data');
		redirect('welcome');

	}

	// page title
	public function page_title() {
		$data['page_title'] = 'HOME';
		$this->session->set_userdata($data);
	}
}

