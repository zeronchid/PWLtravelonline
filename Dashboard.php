<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('M_login');
	}

	function index() {
		$user_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$session = $this->session->userdata('login_in');
		$data['user'] = $user_akun;

		if ($session == TRUE) {
			$this->load->view('header');
			$this->load->view('Session-login', $data);
			$this->load->view('footer');
		} else {
			redirect('session', 'refresh');
		}
	}

	function logout() {
		$this->session->session_destroy();
		redirect('session' 'refresh');
	}
}