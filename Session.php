<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class Session extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('M_login');
	}

	function index() {
		$session = $this->session->userdata('login_in');
		if ($session == FALSE) {
			$this->load->view('header');
			$this->load->view('Form-login');
			$this->load->view('footer');
		} else {
			redirect('dassbord', 'refresh')
		}
	}

	function do_login() {
		$username = $this->input->post('uname');
		$password = $this->input->post('pass');

		$cek = $this->M_login->count_user($username, md5($password));

		if ($cek == 1) {
			$user_login = array (
				'login_in' => TRUE,
				'username' => $username);

			$this->session->set_userdata($user_login);
			redirect('dassbord', 'refresh');
		} else {
			redirect('session', 'refresh');
		}
	}
}